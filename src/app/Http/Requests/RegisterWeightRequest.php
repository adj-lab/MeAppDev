<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterWeightRequest extends FormRequest
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

     //新規会員登録画面：初期体重登録時のバリデーションルール定義
    public function rules()
    {
        return [
            //現在の体重
            'weight' => ['required', 'numeric', 'regex:/^\d{1,4}(\.\d{1})?$/'],
            //目標の体重
            'target_weight' => ['required', 'numeric', 'regex:/^\d{1,4}(\.\d{1})?$/']
        ];
    }
    //バリデーションルール逸脱時：メッセージ定義
    public function messages()
    {
        return [
            'weight.required' => '現在の体重を入力してください',
            'weight.numeric' => '4桁までの数字で入力してください',
            'weight.regex' => '小数点は1桁で入力してください',

            'target_weight.required' => '現在の体重を入力してください',
            'target_weight.numeric' => '4桁までの数字で入力してください',
            'target_weight.regex' => '小数点は1桁で入力してください'
        ];
    }
}
