<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('likes', function (Blueprint $table) {
      // id
      $table->bigIncrements('id');
      // いいね数
      $table->integer("like")->default(0)->comment("いいね数");
      // タイムスタンプ
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('likes');
  }
}
