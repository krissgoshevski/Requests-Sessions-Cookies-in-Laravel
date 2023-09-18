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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'username' => 'required|min:6|max:50|regex:/[0-9]/',
            'password' => 'required|min:8|max:50|regex:/[A-Z]/|regex:/[0-9]/',
            'email' => 'required|email',
            'date' => 'required|date',
        ];
    }


    // ovaa metoda se kreira za da si imame nasi poraki, ne tie so se default od laravel 
    public function messages()
    {
        return [
            'username.required' => 'Mora da vneses username',
            'password.required' => 'Mora da vneses password',
            // 'username.regex:/[0-9]/' => 'Mora da vneses i edna cifra vo username',

            // 'password.regex:/[A-Z]/' => 'Mora da vneses i edna golema bukva vo password',
            // 'password.regex:/[0-9]/' => 'Mora da vneses i edna cifra vo password',

        ];
    }
}
