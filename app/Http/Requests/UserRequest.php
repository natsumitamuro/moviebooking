<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request; // 追加
use Illuminate\Validation\Rule; // 追加


class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        if (isset($request->id)) {
        
        
        return [
            //
            'name' => 'required',//required->入力必須
            'email' => ['required', //重複チェック
                        Rule::unique('users')->ignore($request->id, 'id'),
                        ],
            'password' => 'required',
            'classification' => 'required',
            'gender' => 'required',
            ];
        } else {
            // 登録画面のバリデーション
            return [
                'name' => 'required',//required->入力必須
                'email' => 'required|unique:users', //重複チェック
                'password' => 'required',
                'classification' => 'required',
                'gender' => 'required',
                
            ];
        }
        
    }

    //[Validationメッセージを設定]
    public function messages(){
        return [
            'name.required' => '名前は入力必須です。',
            'email.required' => 'そのメールアドレスは入力必須です。',
            'email.unique'   => 'メールアドレスはすでに使用されています。',
            'password.required' => 'パスワードは入力必須です。',
            'classification.required' => '区分は選択必須です。',
            'gender.required' => '性別は選択必須です。',
        ];
    }
}
