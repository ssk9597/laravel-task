<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// Models
use App\Models\Post;

class User extends Authenticatable
{
  use Notifiable;

  // fillable
  protected $fillable = [
    'name', 'email', 'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  // 1対多のリレーション（Users->親, Posts->子）
  public function posts()
  {
    return $this->hasMany("App\Models\Post");
  }

  // 多対多のリレーション（Users->親, Posts->親, いいね数）
  public function likes()
  {
    return $this->belongsToMany(Post::class)->withTimestamps();
  }
}
