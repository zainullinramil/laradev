<?php

namespace App\Http\Controllers;

use App\Task;
use DB;

class TasksController extends Controller
{
    //
    public function index(){
        $tasks = DB::table('tasks')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task){
        return view('tasks.show', compact('task'));
    }
}
