<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsLikesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('posts_likes', function (Blueprint $table) {
      $table->unsignedBigInteger("post_id")->comment("投稿ID");
      $table->unsignedBigInteger("like_id")->comment("いいねID");

      //プライマリーキー制約
      $table->primary(["post_id", "like_id"]);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('posts_likes');
  }
}
