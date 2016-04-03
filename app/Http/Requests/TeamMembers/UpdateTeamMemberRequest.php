<?php

namespace App\Http\Requests\TeamMembers;

use Gate;
use Auth;
use App\Http\Requests\Request;

class UpdateTeamMemberRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = auth()->user();

        return Gate::allows('update-team-member', $user);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = $this->route('members');

        return [
            'nim'                   => 'required|numeric|digits_between:3,20|unique:team_members,nim,'.$id,
            'name'                  => 'required|max:255',
            'email'                 => 'required|email|max:255|unique:team_members,email,'.$id,
            'generation'            => 'required|numeric|digits:4',
            'phone'                 => 'required|max:255',
            'position'              => 'required|max:255',
        ];
    }

}
