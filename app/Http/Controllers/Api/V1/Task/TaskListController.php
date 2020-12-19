<?php

namespace App\Http\Controllers\Api\V1\Task;

use App\Http\Resources\Task\TaskCollection as TaskCollectionResource;
use App\Models\Task;
use Illuminate\Routing\Controller as BaseController;

class TaskListController extends BaseController
{
  public function __invoke()
  {
      $tasks = Task::all();
      return new TaskCollectionResource($tasks);
  }
}
