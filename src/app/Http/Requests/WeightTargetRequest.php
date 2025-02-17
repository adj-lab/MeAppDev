<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeightTargetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    //weight_targetテーブルへの入力に対するバリデーションルール定義
    public function rules()
    {
        return [
            'target_weight' => [
                'required',
                'digits_between:2,4',
                'regex:/^\d+(\.\d{1})?$/'
            ],
        ];
    }

    //バリデーションルール逸脱時のメッセージ定義
    public function messages()
    {
        return [
            'target_weight.required' => '目標の体重を入力してください',
            'target_weight.digits_between' => '4桁までの数字で入力してください',
            'target_weight.regex' => '小数点は1桁で入力してください'
        ];
    }
}