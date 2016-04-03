<?php

namespace App\Http\Requests\TeamMembers;

use Gate;
use App\Http\Requests\Request;

class CreateTeamMemberRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = auth()->user();

        return Gate::allows('create-team-member', $user);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nim'                   => 'required|numeric|digits_between:3,20|unique:team_members',
            'name'                  => 'required|max:255',
            'email'                 => 'required|email|max:255|unique:team_members',
            'generation'            => 'required|numeric|digits:4',
            'phone'                 => 'required|max:255',
            'position'              => 'required|max:255',
        ];
    }

}
