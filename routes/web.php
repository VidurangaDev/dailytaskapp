<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tasks', function () {
    $data=App\Models\task::all();
    return view('task')->with('tasks'->$data);
});
Route::post('/saveTask',[TaskController::class,'store']);