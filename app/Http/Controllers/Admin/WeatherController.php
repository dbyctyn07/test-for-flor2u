<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Http\Controllers\Controller;
use App\Http\Requests\SearchCityRequest;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Throwable;


class WeatherController extends Controller
{

    public function index()
    {
        return view("admin.weather.index");
    }

    public function search(SearchCityRequest $request)
    {

        $client = new Client();

        try {
            $response = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather?units=metric&q=' . $request->city . '&APPID=' . config('const.OPENWEATHER_APP_ID') );
        }
        catch (Throwable $ex) {
            session()->flash("flashMessage", "Error accessing openweathermap.org, try again later");
            session()->flash("flashType", "error");
            return redirect()->route("admin.weather.index");
        }

        $temperature = json_decode($response->getBody()->getContents())->main->temp;
        return redirect()->route("admin.weather.index")->with([
            'city' => ucfirst(mb_strtolower($request->city)),
            'temperature' => round($temperature, 0)
        ]);

    }

    public function autocomplete(Request $request)
    {
        $cities = City::select('name')->where('name', 'LIKE', '%'. $request->term . '%')->orderBy('name', 'asc')->get();
        foreach ($cities as $city)
            $returnData[] = ['value' => $city->name];
        return response()->json($returnData);
    }

}
