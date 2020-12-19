<?php

namespace App\Models;

use App\Traits\DefineTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use DefineTable, HasFactory;

    protected $table = 'tasks';
    protected $dates = ['created_at'];
    protected $fillable = [ 'title', 'description', 'task_status_id', 'completion_time' ];

    //RELATIONS
    public function status(): BelongsTo
    {
        return $this->belongsTo(TaskStatus::class, 'task_status_id');
    }

}
