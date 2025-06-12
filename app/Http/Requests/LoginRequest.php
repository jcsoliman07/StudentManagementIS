<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'logEmail'      => 'required|email',
            'logPassword'   => 'required',
        ];
    }

    public function messages()
    {
        return[
            'logEmail.required'     => 'Email Address field is required.',
            'logEmail.email'        => 'Please enter a valid email address.',
            'logPassword.required'  => 'Password field is required.',
        ];
    }
}
