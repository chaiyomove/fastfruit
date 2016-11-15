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
            'plotNumber' => 'min:13|max:16',
            'idOrchard' => 'required|numeric',
            'description' => 'required',
            'area' => 'required|numeric',
            'address' => 'required',
            'idProvince' => 'required|numeric|not_in:0',
            'idPlotStatus' => 'required|numeric',
            'idFruitSpecie' => 'required|numeric',
            'pictures' => ''
        ];
    }
}
