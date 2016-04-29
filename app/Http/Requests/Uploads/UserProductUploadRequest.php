<?php

namespace App\Http\Requests\Uploads;

use Gate;
use App\Http\Requests\Request;

class UserProductUploadRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = auth()->user();

        return Gate::allows('product-upload', $user);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'competition_id'    => 'required',
            'karya_note'        => 'max:300',
            'karya'             => 'required|mimes:zip,rar|max:50000',
        ];
    }

}
