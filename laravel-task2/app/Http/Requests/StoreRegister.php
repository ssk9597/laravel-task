<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegister extends FormRequest
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
    public function rules()
    {
        return [
            //【必須】文字列で最大20文字
            "name" => "required|string|max:20",
            //【必須】ダブりなく最大255文字
            "email" => "required|email|unique:registers|max:255",
            //【必須】確認用と同じで少なくとも7文字
            "password" => "required|confirmed|min:7"
        ];
    }
}
