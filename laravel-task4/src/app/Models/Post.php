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

  // 多対多のリレーション（Posts->親, Likes->親）
  public function likes()
  {
    // belongsToMany('関係するモデル', '中間テーブルのテーブル名', '中間テーブル内で対応しているID名', '関係するモデルで対応しているID名');
    return $this->belongsToMany("App\Models\Like", "posts_likes", "post_id", "like_id");
  }
}
