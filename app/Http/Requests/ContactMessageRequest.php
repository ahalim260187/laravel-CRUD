<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:5', 'max:32'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'max:500'],
            'message' => ['required', 'max:5000']
        ];
    }
    function messages()
    {
        return [
            'name.required' => 'Name harus diisi',
            'name.max' => 'Nama tidak boleh dari 32 karakter'
        ];
    }
}
