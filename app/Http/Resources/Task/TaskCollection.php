<?php

namespace App\Http\Resources\Task;

use Illuminate\Http\Resources\Json\ResourceCollection as JsonResourceCollection;

class TaskCollection extends JsonResourceCollection
{
    public $collects = Task::class;

    public function toArray($request)
    {
        return $this->collection;
    }
}
