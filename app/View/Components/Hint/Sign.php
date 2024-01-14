<?php

namespace App\View\Components\Hint;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sign extends Component
{
    public function __construct(
        public \App\Models\Sign $sign
    )
    {
    }

    public function render(): View
    {
        return view('components.hints.sign');
    }
}
