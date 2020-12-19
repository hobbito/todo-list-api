<?php

namespace App\Http\Resources\TaskStatus;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskStatus extends JsonResource
{
    //public static $wrap = 'task_status';

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name
        ];
    }
}
