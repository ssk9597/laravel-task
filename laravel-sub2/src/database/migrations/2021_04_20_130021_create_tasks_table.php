<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
  public function up()
  {
    Schema::create('tasks', function (Blueprint $table) {
      // id
      $table->bigIncrements('id')->comment("id");
      // タスク
      $table->string("task", 255)->comment("タスク");
      // ステータス
      $table->boolean("status")->default(false)->comment("状況(0: 作業中, 1:完了)");
      // タイムスタンプ
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('tasks');
  }
}
