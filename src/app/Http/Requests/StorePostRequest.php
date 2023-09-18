<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // falseを返す場合は403エラーし、コントローラーは実行されない
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
            'title' => ['required', 'max:10'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'タイトル',
        ];
    }

    public function messages(): array
    {
        return [
            // 'name属性.ルール' => '返すテキスト',
            'title.required' => ':attributeは必須です。',
            'title.max' => ':attributeは10文字以内で入力してください。',
        ];
    }
}
