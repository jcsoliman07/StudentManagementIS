<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            
            'regFname'      => 'required|string|max:225',
            'regLname'      => 'required|string|max:225',
            'regMname'      => 'required|string|max:225',
            'regAddress'    => 'required|string|max:225',
            'regGender'     => 'required|in:M,F',
            'regEmail'      => 'required|email|unique:registers,email',
            'regPass'       => 'required|min:6',
            'regConPass'    => 'required|same:regPass',

        ];
    }

    public function messages()
    {
        return [
            'regFname.required'     => 'First Name field is required.',
            'regLname.required'     => 'Last Name field is required.',
            'regMname.required'     => 'Middle Name field is required.',
            'regAddress.required'   => 'Address field is required.',
            'regGender.required'    => 'Gender field is required.',
            'regGender.in'          => 'Gender must be either Male or Female.',
            'regEmail.required'     => 'Student Email field is required.',
            'regEmail.email'        => 'Please enter a valid email address.',
            'regEmail.unique'       => 'This email is already taken.',
            'regPass.required'      => 'Password field is required.',
            'regConPass.required'   => 'Confirm Password field is required.',
            'regConPass.same'       => 'Password and Confirm Password do not match.',
        ];
    }
}
