<?php

namespace App\Http\Requests\Competitions;

use Gate;
use App\Http\Requests\Request;

class CompetitionRegistrationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $role = auth()->user()->role;

        return Gate::allows('register-competition', $role);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'competition' => 'required',
        ];
    }

}
