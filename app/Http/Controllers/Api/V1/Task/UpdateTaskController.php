<?php

namespace App\Http\Controllers\Api\V1\Task;

use App\Http\Requests\Task\UpdateTask as UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Resources\Task\Task as TaskResource;

class UpdateTaskController extends BaseController
{
    public function __invoke(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->only(['title', 'description', 'task_status_id']));
        return new TaskResource($task);
    }
}
