<?php

namespace App\Http\Requests\Users;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|max:255|alpha_dash|unique:users',
            'name'     => 'required|max:255',
            'email'    => 'email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ];
    }

}
