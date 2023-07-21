<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:20'],
            'prenom'=>['required','string','max:10'],
            'postnom'=>['string','max:10','nullable'],
            'Occupation'=>['string','max:20','nullable'],
            'phone'=>['string','nullable'],
            'dateNaissance'=>['required','date'],
            'sexe'=>['required','string','max:6'], 
            'adresse'=>['required','string'], 
            'bio'=>['string','nullable'],
            'photo'=>['image','max:7000']
        ];
    }
}
