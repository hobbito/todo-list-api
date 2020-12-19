<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->namespace('V1')->group(function () {

    Route::namespace('Task')->group(function () {
        Route::get('/tasks', 'TaskListController');
        Route::post('/tasks', 'StoreTaskController');
        Route::get('/tasks/{task}', 'GetTaskController');
        Route::put('/tasks/{task}', 'UpdateTaskController');
        Route::delete('/tasks/{task}', 'DeleteTaskController');
    });

    Route::namespace('TaskStatus')->group(function () {
        Route::get('/statuses', 'TaskStatusListController');
    });

});
