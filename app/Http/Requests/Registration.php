<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Registration extends FormRequest
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
            'name'=>['required','string','min:4'],
            'postName'=>['required','string','min:4'],
            'phone'=>['required','string','min:4','max:13'],
            'adresse'=>['required','string','min:4'],
            'email'=>['required','string','min:5'],
            'password'=>['required','string','min:4'],
        ];
    }
}
