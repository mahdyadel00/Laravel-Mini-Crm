<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;


class StoreUserRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => ['required', 'numeric', 'min:11'],
            'password' => ['required'],
            'pictur' => ['sometimes'],
            'company_id' => ['required'],
        ];
    }

    public function failedValidation(Validator $validator)

    {

        throw new HttpResponseException(response()->json([

            'success'   => false,

            'message'   => 'Validation errors',

            'data'      => $validator->errors()

        ]));
    }



    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'A First Name is required',
            'first_name.required' => 'A Last Name is required',
            'email.required' => 'A Email Address is required',
            'phone.required' => 'A Phone is required',
            'password.required' => 'A Password is required',
            'pictur.required' => 'A Pictur is required',
            'country_id.required' => 'A Country Select is required',
        ];
    }
}
