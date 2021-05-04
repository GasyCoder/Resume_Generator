<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'sex' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'phone' => 'required|min:10|numeric',
            'address' => 'required',
            'postalcode' => 'required|max:3',
            'city' => 'required',
            'country' => 'required',
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
            'sex.required' => 'Veuillez précisez votre sexe',
            'firstname.required'  => 'Veuillez saisir votre prénom',
            'lastname.required'  => 'Veuillez saisir votre nom',
            'birthday.required'  => 'Veuillez saisir votre date de naissance',
            'phone.required'  => 'Veuillez saisir votre numéro de tel',
            'phone.numeric'  => 'Veuillez saisir un numéro valide',
            'phone.max' => 'Le numéro ne doit pas dépacer 10 chiffres',
            'email.required'  => 'Veuillez saisir votre email',
            'address.required'  => 'Veuillez saisir votre adresse',
            'postalcode.required'  => 'Veuillez saisir votre code postal',
            'city.required'  => 'Veuillez saisir votre ville',
            'country.required'  => 'Veuillez saisir votre pays',
        ];
    }
}
