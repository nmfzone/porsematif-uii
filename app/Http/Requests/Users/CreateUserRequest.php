<?php

namespace App\Http\Requests\Users;

use Gate;
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
        $user = auth()->user();

        return Gate::allows('create-users-man', $user);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'              => 'required|max:255|alpha_dash|unique:users',
            'name'                  => 'max:255|unique:users',
            'email'                 => 'required|email|max:255|unique:users',
            'password'              => 'required|confirmed|min:6',
            'institution_name'      => 'required|max:255',
            'institution_address'   => 'required|max:255',
            'status'                => 'required|numeric|max:1',
            'competition'           => 'required',
        ];
    }

}
