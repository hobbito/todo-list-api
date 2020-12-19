<?php

namespace App\Http\Resources\Task;

use App\Http\Resources\TaskStatus\TaskStatus;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class Task extends JsonResource
{
    //public static $wrap = 'task';

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
            'title' => $this->title,
            'short_description' => Str::limit($this->description, 50, $end='...'),
            'description' => $this->description,
            'status' => new TaskStatus($this->status),
            'task_status_id' => $this->status->id,
            'created_at' => $this->created_at->format('H:i d-m-Y'),
        ];
    }
}
