<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('posts', function (Blueprint $table) {
      // id
      $table->bigIncrements('id');
      // タイトル（最大20文字）
      $table->string("title", 20)->comment("タイトル");
      // 本文（最大140文字）
      $table->string("body", 140)->comment("本文");
      // usersリレーション
      $table->unsignedBigInteger("user_id")->comment("ユーザーID");
      // タイムスタンプ
      $table->timestamps();

      // 外部キー制約
      $table->foreign("user_id")->references("id")->on("users");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('posts');
  }
}
