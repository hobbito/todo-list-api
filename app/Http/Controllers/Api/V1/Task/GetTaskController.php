<?php

namespace App\Http\Controllers\Api\V1\Task;

use App\Models\Task;
use App\Http\Resources\Task\Task as TaskResource;
use Illuminate\Routing\Controller as BaseController;

class GetTaskController extends BaseController
{
  public function __invoke(Task $task)
  {
      return new TaskResource($task);
  }
}
