<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Task::resource
Route::resource('tasks', 'TaskController', ['only' => ['index', 'store', 'update', 'destroy']]);
