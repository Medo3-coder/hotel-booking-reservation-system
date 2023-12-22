<?php

namespace App\Http\Requests\Site\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {



    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name'                  => 'required|max:50',
            'phone'                 => 'required|numeric|digits_between:9,10|unique:users,phone',
            'address'               => 'required|string',
            'email'                 => 'required|email|unique:users,email|max:50',
            'password'              => 'required|min:6|max:100',
            'password_confirmation' => 'required|same:password|min:6|max:100',

        ];
    }

}
