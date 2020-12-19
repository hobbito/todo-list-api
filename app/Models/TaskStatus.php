<?php

namespace App\Models;

use App\Traits\DefineTable;
use Illuminate\Database\Eloquent\Model;

class TaskStatus extends Model
{
    use DefineTable;

    protected $table = 'task_statuses';
    protected $fillable = [ 'name' ];


}
