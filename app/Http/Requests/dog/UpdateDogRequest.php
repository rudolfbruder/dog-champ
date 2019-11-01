<?php

namespace App\Http\Requests\Dog;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDogRequest extends FormRequest
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
            //
            'name' => 'required',
            'nick_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'race_id' => 'required',
            'place_of_birth' => 'required',
            'private' => 'required',
            'about' => 'required'
        ];
    }
}