<?php

namespace App;

use App\Project;
use App\Activity;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\morphMany;

class Task extends Model
{
    use RecordsActivity;

    protected $guarded = [];

    protected $touches = ['project'];

    protected $casts = ['completed' => 'boolean'];

    protected static $recordableEvents = ['created', 'deleted'];

    public function complete(){
        $this->update(['completed' => true]);
        $this->recordActivity('completed_task');
    }

    public function incomplete(){
        $this->update(['completed' => false]);
        $this->recordActivity('incompleted_task');
    }

    public function project(){
        return $this->belongsTo(Project::class);
    }

    public function path(){
        return "/projects/{$this->project->id}/tasks/{$this->id}";
    }
}
