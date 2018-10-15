<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;
use \App\Models\Log;

class LogsController extends Controller
{
    public function getAllTasksLog($type = '')
    {
        $logs = Log::getTasksByStatus($type)->get();;

        return view('logs', ['logs' => $logs]);
    }

    public function moveToWork() {
        DB::table('logs')->where(['status' => 0])->orderBy('logs.created_at', 'asc')->limit(1)->update(['status' => 1]);

        return redirect('/');
    }
}
