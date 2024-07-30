<?php

namespace App\Http\Requests\users;

use Illuminate\Foundation\Http\FormRequest;

class UserRegister extends FormRequest
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
            'email'=>['required','email','unique:users,email'],
            'name'=>['required','string','min:2','max:20'],
            'password'=>['required','min:2','regex:/(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])/','confirmed'],
        ];
    }
    public function messages()
    {
        return [
            'password.regex' => 'Password must contain at least one uppercase letter,one digit, and one special character from @$!%*?&',
        ];
    }
}
