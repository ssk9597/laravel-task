<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Model
use App\Models\Task;
//Validation
use App\Http\Requests\StoreTaskPost;

class TaskController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  //タスク内容を取得する
  public function index()
  {
    //すべてのデータを取得する
    $values = Task::all();

    return view("tasks.index", compact("values"));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  //新規タスクの追加を行う
  public function store(StoreTaskPost $request)
  {
    //Model
    $task = new Task;

    //値を取得し書き込み
    $task->task = $request->input("task");

    //DBに保存
    $task->save();

    //リダイレクト
    return redirect("/tasks");
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $value = Task::find($id);

    $value->fill(["status" => !$value->status])->save();

    return redirect("/tasks");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $value = Task::find($id);
    $value->delete();

    return redirect("/tasks");
  }
}
