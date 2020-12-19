<?php

namespace App\Http\Controllers\Api\V1\Task;

use App\Models\Task;
use Illuminate\Routing\Controller as BaseController;

class DeleteTaskController extends BaseController
{
    public function __invoke(Task $task)
    {
        $task->delete();
        return $task;
    }
}
