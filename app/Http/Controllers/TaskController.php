<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;//use to as included like php


class TaskController extends Controller
{
    public function store(Request $request){
        
        //dd($request->all());
        $task= new task;

        //validation for the input text feild
        $validatedData = $request->validate([
            'task'=>'required|max:100|min:5',
        ]);

        $task->task=$request->task;//equal to comming task in to the request
        $task->save();
        return redirect()->back();
    }
}
