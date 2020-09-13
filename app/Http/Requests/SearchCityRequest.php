<?php

namespace App\Http\Requests;

use App\Rules\CityExists;
use Illuminate\Foundation\Http\FormRequest;

class SearchCityRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'city' => ['min:2', 'max:50', 'required', new CityExists()]
        ];
    }

}
