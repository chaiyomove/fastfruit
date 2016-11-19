<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'firstName' => 'required',
            'lastName' => 'required',
            'citizenId' => 'integer|min:13|max:13',
            'phone' => 'numeric|digits_between:9,10',
            'address' => 'required',
            'idProvince' => 'required|numeric|not_in:0',
            'pictures' => ''
        ];
    }
}
