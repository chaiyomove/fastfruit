<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatchOrchardRequest extends FormRequest
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
            'fruitNum' => 'required|numeric',
            'idFruitSpecie' => 'required',
            'idPlotStatus' => 'required',
            'idProvince' => 'required',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'unit' => 'required'

        ];
    }
}
