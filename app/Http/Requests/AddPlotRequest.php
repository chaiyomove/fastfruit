<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPlotRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'plotNumber' => 'numeric|digits_between:13,16',
            'description' => 'required',
            'area' => 'required|numeric|not_in:0',
            'address' => 'required',
            'idProvince' => 'required|numeric|not_in:0',
            'idPlotStatus' => 'required|numeric',
            'idFruitSpecie' => 'required|numeric',
            'pictures' => ''
        ];
    }
}
