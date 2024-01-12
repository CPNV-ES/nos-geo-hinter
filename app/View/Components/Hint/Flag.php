<?php

namespace App\View\Components\Hint;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Flag extends Component
{
    public function __construct(
        public \App\Models\Flag $flag
    )
    {
    }

    public function render(): View
    {
        return view('components.hints.flag');
    }
}
