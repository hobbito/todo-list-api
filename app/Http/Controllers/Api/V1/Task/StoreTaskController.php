<?php

namespace App\Http\Controllers\Api\V1\Task;

use App\Http\Requests\Task\StoreTask as StoreTaskRequest;
use App\Models\Task;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Resources\Task\Task as TaskResource;

class StoreTaskController extends BaseController
{
  public function __invoke(StoreTaskRequest $request)
  {
      $data = ($request->only(['title', 'description']) + ['task_status_id' => 1]);
      $task = Task::create($data);
      return new TaskResource($task);
  }
}
