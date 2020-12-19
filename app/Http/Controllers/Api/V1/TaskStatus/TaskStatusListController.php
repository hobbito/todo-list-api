<?php

namespace App\Http\Controllers\Api\V1\TaskStatus;

use App\Http\Resources\TaskStatus\TaskStatusCollection;
use App\Models\TaskStatus;
use Illuminate\Routing\Controller as BaseController;

class TaskStatusListController extends BaseController
{
  public function __invoke()
  {
      $taskStatuses = TaskStatus::all();
      return new TaskStatusCollection($taskStatuses);
  }
}
