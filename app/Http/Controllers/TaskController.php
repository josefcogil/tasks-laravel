<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index () {
        return view('home');
    }
    
    public function getAll() {
        return 'All tasks';
    }

    public function getOne($id) {
        return 'Task '.$id;
    }
}
