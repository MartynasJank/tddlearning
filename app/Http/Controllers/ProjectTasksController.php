<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\method;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project){
        $this->authorize('update', $project);
        request()->validate(['body' => 'required']);

        $project->addTask(request('body'));

        return redirect($project->path());
    }

    public function update(Project $project, Task $task){
        $this->authorize('update', $task->project);

        $attributes = request()->validate(['body' => 'required']);

        $task->update($attributes);

        request('completed') ? $task->complete() : $task->incomplete();

        return redirect($project->path());
    }
}
