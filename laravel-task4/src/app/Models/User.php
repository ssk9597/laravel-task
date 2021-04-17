<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  // 1対多のリレーション（Users->親, Posts->子）
  public function posts()
  {
    return $this->hasMany("App\Models\Post");
  }
}
