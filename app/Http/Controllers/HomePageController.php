<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Language;
use App\Models\Log;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Get the statistic of the resource.
     */
    public function index()
    {
        $countries = Country::all()->count();
        $languages = Language::all()->count();
        $logCount = Log::all()->count();
        $bestCountry = $this->bestCountry();
        $bestHint = $this->bestHint();
        $bestCountryByFlag = $this->bestCountryByScope('flag');
        $bestCountryByLanguage = $this->bestCountryByScope('language');
        $bestCountryBySign = $this->bestCountryByScope('sign');
        $bestCountryByChar = $this->bestCountryByScope('char');


        return view('index', compact('countries', 'languages', 'logCount', 'bestCountry', 'bestHint', 'bestCountryByFlag', 'bestCountryByLanguage', 'bestCountryBySign', 'bestCountryByChar'));
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

    public function bestCountryByScope($scope){
        $logs = Log::all();
        $stats = [];
        foreach ($logs as $log) {
            if (!isset($stats[$log->country_id])) {
                $stats[$log->country_id] = 0;
            }
            if($log->scope == $scope){
                $stats[$log->country_id]++;
            }
        }
        $bestCountry = array_search(max($stats), $stats);

        return Country::find($bestCountry);

    }
}
