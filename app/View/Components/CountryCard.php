<?php

namespace App\View\Components;

use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CountryCard extends Component
{
    public function __construct(
        public Country $country
    )
    {
    }

    public function render(): View
    {
        return view('components.country-card', [
            'country' => $this->country,
        ]);
    }
}
