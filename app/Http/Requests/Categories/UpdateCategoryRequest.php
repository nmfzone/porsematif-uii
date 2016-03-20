<?php

namespace App\Http\Requests\Categories;

use App\Http\Requests\Request;

class UpdateCategoryRequest extends Request
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
        $id = $this->route('categories')->id;

        return [
            'name' => 'required|max:255|unique:categories'.$id,
        ];
    }

}
