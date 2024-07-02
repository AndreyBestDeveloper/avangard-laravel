<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ArticleRequest extends FormRequest
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
            'articleName' => 'required|min:3|max:100',
            'pseudonymName' => 'required|min:3|max:100',
            'textArea1' => 'required|min:5|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'articleName.required' => 'Поле Назание статьи является обязательным',
            'articleName.min' => 'В Назании статьи должно быть не менее трёх символов',
            'articleName.max' => 'В Назании статьи должно быть не более ста символов',

            'pseudonymName.required' => 'Поле Псевдоним является обязательным',
            'pseudonymName.min' => 'В Псевдониме должно быть не менее трёх символов',
            'pseudonymName.max' => 'В Псевдониме должно быть не более ста символов',
 
            'textArea1.required' => 'Поле Текст статьи является обязательным',
            'textArea1.min' => 'В Текстеи статьи должно быть не менее пяти символов',
            'textArea1.max' => 'В Тексте статьи должно быть не более тысячи символов'
        ];
    }


}
