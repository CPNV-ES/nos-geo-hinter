<?php

namespace App\View\Components;

use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchBar extends Component
{
    public function render(): View
    {
        return view('components.search-bar', [
            'countries' => Country::names(),
        ]);
    }
}
