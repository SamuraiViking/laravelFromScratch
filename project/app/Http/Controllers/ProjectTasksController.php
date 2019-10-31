<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {

    }

    public function store()
    {
        // Task::create([
        //     'project_id' => 5,
        //     'description' => 'walk the dog',
        //     'completed' => false,
        // ]);
        dd(request()->all());
    }
}
