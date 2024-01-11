<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Color extends Component
{
    public function __construct(
        public \App\Models\Color $color
    )
    {
    }

    public function render(): View
    {
        return view('components.color');
    }
}
