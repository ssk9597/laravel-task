<?php

namespace App\Repositories\Task;

// models
use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface
{
  // tasksテーブルをすべて取得
  public function getTasks()
  {
    return Task::all();
  }

  // tasksテーブルに追加
  public function createTask($request)
  {
    // instance
    $task = new Task;
    // 値の代入
    return $task->fill($request->all())->save();
  }

  // tasksテーブルの要素を更新
  public function updateTask($id)
  {
    // 取得
    $value = Task::find($id);

    // ステータスを更新
    return $value->fill(["status" => !$value->status])->save();
  }

  // tasksテーブルの要素を削除
  public function destroyTask($id)
  {
    // 取得
    $value = Task::find($id);

    // 取得して削除
    return $value->delete();
  }
}
