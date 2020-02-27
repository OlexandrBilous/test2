<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommentPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment' => 'required|min:5|max:255',
            'articles_id' => 'required',  /*Rule::exists(),*/
        ];
    }

    /*public function messages()
    {
        return [
            'comment.required' => 'Необходимо указать комментарий',
            'comment.min' => 'Необходимо написать больше 5 символов',
            'comment.max' => 'Вы превысили заданный размер (больше 255 символов)',
        ];
    }*/
}
