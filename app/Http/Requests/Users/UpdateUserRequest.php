<?php

namespace App\Http\Requests\Users;

use Auth;
use App\Http\Requests\Request;

class UpdateUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('users')->id;

        return [
            'username' => 'required|max:255|alpha_dash|unique:users,username,'.$id,
            'name'     => 'required|max:255',
            'email'    => 'email|max:255|unique:users,email,'.$id,
            'password' => 'confirmed|min:6',
        ];
    }

}
