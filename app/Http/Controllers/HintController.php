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
}
