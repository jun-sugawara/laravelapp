<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'hello')
        {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => "required",
            'mail' => "email",
            'age' => "numeric|hello",
        ];
    }
    public function messages()
    {
        return [
            'name.required'=> '名前は必須です',
            'mail.email'=> 'メールは必須です',
            'age.numeric'=> '年齢は数字で入力してください',
            'age.between'=> '年齢は0~150でご入力ください',
            'age.hello'=> 'Hello!入力は偶数のみ受け付けます'
        ];
    }
}
