<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use DateTime;

class HintController extends Controller
{
    public function LogUsefullHint(Request $request)
    {
        $log = new Log;
        $log->country_id = $request->country_id;
        $log->scope = $request->scope;
        $log->save();
        return $log;
    }
    //count each log by scope and return the count
    public function stats()
    {
        $logs = Log::all();
        $stats = [];
        foreach ($logs as $log) {
            if (!isset($stats[$log->scope])) {
                $stats[$log->scope] = 0;
            }
            $stats[$log->scope]++;
        }
        return $stats;
    }
}
