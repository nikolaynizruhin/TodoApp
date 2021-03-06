<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('tasks');
});

/**
 * Get All Tasks
 */
Route::get('/tasks', function () {
    return Task::all()->toArray();
});

/**
 * Add New Task
 */
Route::post('/task', function (Request $request) {
  $task = new Task;
  $task->name = $request->name;
  $task->save();

  return $task->toArray();
});
