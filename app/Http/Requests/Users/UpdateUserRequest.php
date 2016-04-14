<?php

namespace App\Http\Requests\Users;

use Gate;
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
        $user = auth()->user();

        return Gate::allows('update-users-man', $user);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $user = $this->route('users');

        return [
            'username'              => 'required|max:255|alpha_dash|unique:users,username,'.$user->id,
            'name'                  => 'max:255|unique:users,name,'.$user->id,
            'email'                 => 'required|email|max:255|unique:users,email,'.$user->id,
            'password'              => 'confirmed|min:6',
            'institution_name'      => 'sometimes|required|max:255',
            'institution_address'   => 'sometimes|required|max:255',
            'status'                => 'sometimes|required|numeric|min:0|max:4',
            'competition'           => 'sometimes|required',
        ];
    }

}
