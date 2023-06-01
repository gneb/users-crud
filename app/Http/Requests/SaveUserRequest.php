<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;

class SaveUserRequest extends FormRequest
{

    protected function getRedirectUrl()
    {
        return parent::getRedirectUrl() . '#addUserModal';
    }
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['max:255', 'string'],
            'last_name' => ['max:255', 'string'],
            'username' => ['required','max:15', 'string', 'regex:/^[a-z0-9._-]+$/'],
            'birth_date' => ['date', 'nullable'],
            'is_admin' => [Rule::in(['1', '0']), 'required'],
            'password' => ['required', 'min:6', 'string']
        ];
    }

    public function messages(): array
    {
        return [
            'username.regex' => 'Invalid format. Please use lowercase alphabet characters, numbers, dots, underscores or dashes.',
        ];
    }

    
}
