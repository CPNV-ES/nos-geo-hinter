<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Country;
use Illuminate\Contracts\View\View;

class ComponentController extends Controller
{

    private Country $country;

    public function __construct()
    {
        $this->country = Country::find('655f32258990200748e635b8');
    }

    public function color(): View
    {
        $color = new Color();
        $color->name = 'Rouge';
        $color->hex = 'FF0000';
        return view('demo.components.color', compact('color'));
    }

    public function flag(): View
    {
        return view('demo.components.flag', ['countries' => Country::all()]);
    }

    public function language(): View
    {
        return view('demo.components.language', ['language' => $this->country->languages()[0]]);
    }

    public function countryCard(): View
    {
        return view('demo.components.country-card', ['country' => $this->country]);
    }


}
