<?php

namespace App\Http\Requests\Galleries;

use Gate;
use App\Http\Requests\Request;

class GalleryUploadsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $role = auth()->user()->role;

        return Gate::allows('gallery-uploads', $role);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'years'     => 'required|digits:4',
            'note'      => 'max:300',
            'galleries' => 'required|mimes:jpeg,png|max:10000',
        ];
    }

}
