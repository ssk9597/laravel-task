<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostUserTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('post_user', function (Blueprint $table) {
      // id
      $table->bigIncrements('id');
      // 投稿ID
      $table->unsignedBigInteger("post_id")->comment("投稿ID");
      // ユーザーID
      $table->unsignedBigInteger("user_id")->comment("ユーザーID");
      // タイムスタンプ
      $table->timestamps();

      // 外部キー制約
      $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
      $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");

      // ユニーク
      $table->unique(["post_id", "user_id"]);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('post_user');
  }
}
