<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Get the statistic of the resource.
     */
    public function index()
    {
        $countries = Country::all()->count();
        $languages = Country::all()->sum('languages_count');
        $circulations = Country::all()->sum('circulations_count');
        $flags = Country::all()->sum('flags_count');
        $plates = Country::all()->sum('plates_count');

        return view('index', compact('countries', 'languages', 'circulations', 'flags', 'plates'));
    }

    public function bestCountry()
    {
        $logs = Log::all();
        $stats = [];
        foreach ($logs as $log) {
            if (!isset($stats[$log->country_id])) {
                $stats[$log->country_id] = 0;
            }
            $stats[$log->country_id]++;
        }
        $bestCountry = array_search(max($stats), $stats);
        return Country::find($bestCountry)->name;
    }

    public function bestHint(){
        $logs = Log::all();
        $stats = [];
        foreach ($logs as $log) {
            if (!isset($stats[$log->scope])) {
                $stats[$log->scope] = 0;
            }
            $stats[$log->scope]++;
        }
        $bestHint = array_search(max($stats), $stats);
        return $bestHint;
    }
}
