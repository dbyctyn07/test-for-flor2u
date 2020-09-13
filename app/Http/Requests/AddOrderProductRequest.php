<?php

namespace App\Http\Requests;

use App\Rules\CityExists;
use Illuminate\Foundation\Http\FormRequest;

class AddOrderProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'quantity' => ['required', 'integer', 'min:1'],
        ];
    }

}
