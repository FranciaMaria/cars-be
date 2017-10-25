<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CarRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'mark' => 'required | min:2',
            'model' => 'required | min:2',
            'year' => 'required',
            'maxSpeed' => 'integer | min:19 | max:300',
            'isAutomatic' => 'required',
            'engine' => 'required',
            'numberOfDoors' => 'required | integer | min:1 | max: 5'
        ];
    }
}





