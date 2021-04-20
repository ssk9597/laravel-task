<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Validation
use App\Http\Requests\StoreTaskPost;

// Repositories
use App\Repositories\Task\TaskRepositoryInterface;

class TaskController extends Controller
{
  // construct
  public function __construct(TaskRepositoryInterface $task_repository)
  {
    $this->task_repository = $task_repository;
  }

  public function index()
  {
    // Repositories->getTasks()
    $values = $this->task_repository->getTasks();

    return view("tasks.index", compact("values"));
  }

  public function store(StoreTaskPost $request)
  {
    // Repositories->createTask()
    $this->task_repository->createTask($request);

    return redirect("/tasks");
  }

  public function update(Request $request, $id)
  {
    // Repositories->updateTask()
    $this->task_repository->updateTask($id);

    return redirect("/tasks");
  }

  public function destroy($id)
  {
    // Repositories->destroyTask()
    $this->task_repository->destroyTask($id);

    return redirect("/tasks");
  }
}
