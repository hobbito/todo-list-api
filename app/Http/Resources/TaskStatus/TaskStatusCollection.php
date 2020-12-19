<?php

namespace App\Http\Resources\TaskStatus;

use Illuminate\Http\Resources\Json\ResourceCollection as JsonResourceCollection;

class TaskStatusCollection extends JsonResourceCollection
{
    public $collects = \App\Http\Resources\TaskStatus\TaskStatus::class;

    public function toArray($request)
    {
        return $this->collection;
    }
}
