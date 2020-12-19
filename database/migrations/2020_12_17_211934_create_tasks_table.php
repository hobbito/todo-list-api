<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TaskStatus;
use App\Models\Task;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Task::getTableName(), function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->foreignId('task_status_id')->default(1)
                ->constrained(TaskStatus::getTableName())
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('completion_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Task::getTableName());
    }
}
