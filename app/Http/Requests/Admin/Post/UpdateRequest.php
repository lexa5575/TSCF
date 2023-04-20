<?php

namespace App\Http\Requests\Admin\Post;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file',
            'main_image' => 'nullable|file',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Это поле необходимо для заполнения',
            'title.string'=>'Данные должны соответствовать строчному типу',
            'content.required'=>'Это поле необходимо для заполнения',
            'content.string'=>'Данные должны соответствовать строчному типу',
            'preview_image.required'=>'Это поле необходимо для заполнения',
            'preview_image.file'=>'Необходимо выбрать фаил',
            'main_image.required'=>'Это поле необходимо для заполнения',
            'main_image.file'=>'Необходимо выбрать фаил',
            'category_id.required'=>'Это поле необходимо для заполнения',
            'category_id.integer'=>'Данные должны соответствовать числовому типу',
            'category_id.exists'=>'Данные должны быть в базе',
            'tag_ids.array'=>'Необъодимо отправить массив данных',
        ];
    }
}
