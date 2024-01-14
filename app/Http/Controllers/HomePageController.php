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
}
