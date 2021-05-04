<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducation extends FormRequest
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
            'school' => 'required',
            'degree' => 'required',
            'begin' => 'required',
        ];
    }


     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'school.required' => 'Veuillez préciser l\'endroit où vous avez étudié',
            'degree.required'  => 'Veuillez renseigner le diplôme que vous avez obtenu',
            'begin.required'  => 'Veuillez indiquer la date à laquelle vous avez commencé à étudier dans cet endroit',
        ];
    }
}
