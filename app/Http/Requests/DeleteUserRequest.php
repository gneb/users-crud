<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class DeleteUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'ids' => ['array']
        ];
    }

    public function after(): array
    {
        return [
            function (Validator $validator) {
                if (in_array(Auth::user()->id, $this->get('ids'))) {
                    $validator->errors()->add(
                        'ids',
                        'you can\'t delete yourself!'
                    );
                    session()->flash("error", "You can't delete");
                }
            }
        ];
    }
}
