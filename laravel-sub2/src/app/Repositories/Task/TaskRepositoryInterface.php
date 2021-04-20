<?php

namespace App\Repositories\Task;

interface TaskRepositoryInterface
{
  // tasksテーブルをすべて取得
  public function getTasks();

  // tasksテーブルに追加
  public function createTask($request);

  // tasksテーブルの要素を更新
  public function updateTask($id);

  // tasksテーブルの要素を削除
  public function destroyTask($id);
}
