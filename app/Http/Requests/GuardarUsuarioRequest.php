<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class GuardarUsuarioRequest extends FormRequest
{
    // Validar datos del usuario
    static public function myRules()
    {
        return [
            'name' => 'required|min:4|max:25',
            'email' => 'required|email|unique:users,email|max:50',
            'password' => 'required|min:5|max:20'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return $this->myRules();
    }
}
