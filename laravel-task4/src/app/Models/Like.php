<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  //fillable
  protected $fillable = ["like", "likecheck"];

  // 多対多のリレーション（Posts->親, Likes->親）
  public function posts()
  {
    // belongsToMany('関係するモデル', '中間テーブルのテーブル名', '中間テーブル内で対応しているID名', '関係するモデルで対応しているID名');
    return $this->belongsToMany("App\Models\Post", "posts_likes", "like_id", "post_id");
  }
}
