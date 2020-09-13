<?php


namespace App\Rules;

use App\City;
use Illuminate\Contracts\Validation\Rule;

class CityExists implements Rule
{

    public function passes($attribute, $value)
    {
        return City::where('name', $value)->exists();
    }

    public function message()
    {
        return 'Openweathermap.org has no data for that city';
    }

}