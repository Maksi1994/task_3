<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TasksController@getTasksList');
Route::get('/addToTasks/{task_id}', 'TasksController@addToTasks');
Route::get('/log/{type?}', 'LogsController@getAllTasksLog');
Route::get('/moveToWork/', 'LogsController@moveToWork');


