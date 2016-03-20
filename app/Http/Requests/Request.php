<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{

    /**
     * Set custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required'           => 'Kolom harus di isi.',
            'username.unique'    => 'Username sudah ada sebelumnya.',
            'username.max'       => 'Username maksimal :max karakter.',
            'name.max'           => 'Nama maksimal :max karakter.',
            'email'              => 'Email tidak valid.',
            'email.unique'       => 'Email sudah ada sebelumnya.',
            'email.max'          => 'Email maksimal :max karakter.',
            'password.min'       => 'Password minimal :min karakter.',
            'password.confirmed' => 'Password konfirmasi tidak sama.',
        ];
    }

}
