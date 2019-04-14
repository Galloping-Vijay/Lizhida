<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagCreateRequest extends FormRequest
{
    /**
     * 验证用户是否经过登录认证
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * 返回验证规则数组
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tag' => 'bail|required|unique:tags,tag',
            'title' => 'required',
            'subtitle' => 'required',
            'layout' => 'required',
        ];
    }
}