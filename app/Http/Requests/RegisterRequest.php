<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username'   => 'required|unique:users,username',
            'email'      => 'required|email',
            'password'   => 'required|min:3',
            'repassword' => 'required|same:password'
        ];
    }

    public function messages(){
        return [
            'username.required' => 'Please Enter Username',
            'username.unique' => 'Username is exists',
            'email.required' => 'Please Enter Email',
            'email.email' => 'Email is invalid format',
            'password.required' => 'Please enter Password',
            'password.min' => 'Password must more than 3 characters',
            'repassword.required' => 'Please enter Confirm Password',
            'repassword.same' => 'Confirm Password is incorrect'
        ];
    }
}
