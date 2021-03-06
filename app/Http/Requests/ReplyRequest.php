<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        return [
          'content' => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'content.required' => '评论内容不能为空!',
            'content.min' => '评论内容至少为2个字符!'
        ];
    }
}
