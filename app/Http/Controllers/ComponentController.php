<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Country;
use Illuminate\Contracts\View\View;

class ComponentController extends Controller
{

    public function __construct()
    {
        $this->country = Country::find('655f32258990200748e635b8');
    }

    public function color(): View
    {
        $color = new Color();
        $color->name = 'Rouge';
        $color->hex = 'FF0000';
        return view('test.components.color', compact('color'));
    }
    public function searchBar() : view
    {
        return view('test.components.search-bar');
    }

    public function flag(): View
    {
        return view('test.components.flag', ['countries' => Country::all()]);
    }

    public function plate(): View
    {
        return view('test.components.plate', ['countries' => Country::all()]);
    }

    public function language(): View
    {
        return view('test.components.language', ['language' => $this->country->languages()[0]]);
    }

    public function countryCard(): View
    {
        return view('test.components.country-card', ['country' => $this->country]);
    }


}
