<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
      // タイトル（必須、20文字以内）
      "title" => "required|string|max:20",
      // 本文（必須、140文字以内）
      "body" => "required|string|max:140"
    ];
  }
}
