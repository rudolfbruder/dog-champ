<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAwardRequest extends FormRequest
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
            'dog_id' => 'required',
            'competition_id'  => 'required',
            'award_type_id'  => 'required',
            'date'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'Vyplnte povinne pole Datum ziskania.',
        ];
    }
}