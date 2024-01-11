<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Country;
use App\Models\Flag;
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

    public function flag(): View
    {
        return view('test.components.flag', ['flag' => $this->country->flag]);
    }

    public function countryHeader(): View
    {
        return view('test.components.country-header', ['country' => $this->country]);
    }


}
