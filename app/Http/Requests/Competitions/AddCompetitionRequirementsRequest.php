<?php

namespace App\Http\Requests\Competitions;

use Gate;
use App\Http\Requests\Request;

class AddCompetitionRequirementsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $role = auth()->user()->role;

        return Gate::allows('add-competition-requirements', $role);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pem_note'          => 'max:300',
            'surper_note'       => 'max:300',
            'pembayaran'        => 'mimes:jpeg,png|max:10000',
            'surat_pernyataan'  => 'mimes:jpeg,png|max:10000',
        ];
    }

}
