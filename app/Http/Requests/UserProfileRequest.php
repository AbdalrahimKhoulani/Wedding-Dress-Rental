<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'user_id' => ['required'],
            'current_password' => ['required', 'string', 'min:8'],
            // 'password' => ['string', 'min:8', 'confirmed']
        ];
    }

    public function messages(){
        return [
            'user_id.required' => 'Something wrong!!',
            'name.string' => 'Name must be a string',
            'email.required' => 'Email is required field',
            'name.required' => 'Name is required field',
            'current_password.required' => 'Current Password is required field',
        ];
    }
}
