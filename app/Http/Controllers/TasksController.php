<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class TasksController extends Controller
{

    public function getTasksList()
    {
        $tasks = DB::table('tasks')->orderBy('counter', 'desc')->orderBy('id', 'desc')->get();

        return view('tasks', ['tasks' => $tasks]);
    }

    public function addToTasks($task_id)
    {
        $counter = DB::table('tasks')->where(['id' => $task_id])->value('counter');
        DB::table('tasks')->where(['id' => $task_id])->update(['counter' => $counter + 1]);


        if (!DB::table('logs')->where(['task_id' => $task_id])->exists()) {
            DB::table('logs')->insert(['task_id' => $task_id, 'created_at'=> date('Y-m-d H:i:s')]);
        }

        return redirect('/');
    }
}
