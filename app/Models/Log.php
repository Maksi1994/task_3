<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $timestamps = true;


    public function scopeGetTasksByStatus($query, $type = '')  {
        $selectStatuses = [];

        switch ($type) {
            case 'done' :
                $selectStatuses[] = 1;
                break;
            case 'waiting':
                $selectStatuses[] = 0;
                break;
            default:
                $selectStatuses = [0, 1];
        }

        return $query
            ->leftJoin('tasks', 'tasks.id', '=', 'logs.task_id')
            ->whereIn('logs.status', $selectStatuses)
            ->orderBy('logs.created_at', 'asc');
    }

}
