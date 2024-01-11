<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Language extends Component
{
    public function __construct(
        public \App\Models\Language $language
    ) {
    }

    public function render(): View
    {
        return view('components.language', [
            'language' => $this->language,
        ]);
    }
}
