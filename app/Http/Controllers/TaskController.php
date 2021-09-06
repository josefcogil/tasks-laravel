<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index () {
        $tasks = DB::table('tasks')->get();
        return view('home', ['tasks' => $tasks]);
    }
    
    public function getAll() {
        return 'All tasks';
    }

    public function getOne($id) {
        $task = DB::table('tasks')->find($id);
        
        return 'id: '.$task->id.', title: '.$task->title.', description: '.$task->description;
    }
}
