<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperience extends FormRequest
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
            'company' => 'required',
            'jobtitle' => 'required',
            'begin' => 'required',
            'jobdescription' => 'required'
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
            'company.required' => 'Veuillez préciser l\'entreprise où vous avez travaillé',
            'jobtitle.required'  => 'Veuillez renseigner le poste que vous avez occupé',
            'jobdescription.required'  => 'Veuillez saisir une brève description de votre rôle dans cette entrprise',
            'begin.required'  => 'Veuillez indiquer la date à laquelle vous avez commencez ce travail',
        ];
    }
}
