<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  //fillable
  protected $fillable = ["title", "body", "user_id"];

  // 1対多のリレーション（Users->親, Posts->子）
  public function user()
  {
    return $this->belongsTo("App\Models\User");
  }
}
