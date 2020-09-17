<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscripcionRequest extends FormRequest
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
            'name' => 'required|string',
            'lastname'  => 'required|string',
            'date_birth' =>  'required|date',
            'sex' => 'required',
            'address' => 'required',
            'phone' => 'required|max:10',
            'gender_identity' => 'required',
            'sexual_orientation' => 'required',
            'id_disability' => 'required',
            'id_groupP' => 'required',
            'occupation' => 'required',
            'path' => 'required',
        ];
    }
}
