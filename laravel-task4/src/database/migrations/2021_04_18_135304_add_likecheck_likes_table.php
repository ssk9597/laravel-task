<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLikecheckLikesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('likes', function (Blueprint $table) {
      // カラム追加(これでそのユーザーがいいねしたかを判別する)
      $table->boolean("likecheck")->default(false)->comment("いいねチェック");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('likes', function (Blueprint $table) {
      //
    });
  }
}
