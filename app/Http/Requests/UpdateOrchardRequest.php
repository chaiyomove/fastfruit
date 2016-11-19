<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrchardRequest extends FormRequest
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
            'nameOrchard' => 'required',
            'description' => 'required',
            'area' => 'required|numeric|not_in:0',
            'address' => 'required',
            'phone' => 'numeric|digits_between:9,10',
            'idProvince' => 'required|numeric|not_in:0',
            'pictures' => ''
        ];
    }
}
