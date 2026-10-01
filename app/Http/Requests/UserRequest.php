<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Uppercase;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                new Uppercase(),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama harus diisi!',
        ];
    }
}