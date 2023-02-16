<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required|min:5',
            'quiz_correct' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'body.required' => '本文は必須です',
            'body.min' => ':min 文字以上入力してください',
        ];
    }
}