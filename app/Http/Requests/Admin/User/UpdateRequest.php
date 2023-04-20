<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'email|required|string|unique:users',
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Это поле необходимо для заполнения',
            'email.unique'=>'Данный емаил уже добавлен',
            'email.email'=>'Введите правильный емаил',
            'email.string'=>'Введите правильный емаил',
        ];
    }
}
