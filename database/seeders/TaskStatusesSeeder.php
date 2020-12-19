<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Seeder;

class TaskStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaskStatus::create([ 'key' => 'PENDING', 'name' => 'Pending' ]);
        TaskStatus::create([ 'key' => 'INPROGRESS', 'name' => 'In Progress' ]);
        TaskStatus::create([ 'key' => 'DONE', 'name' => 'Done' ]);
    }
}
