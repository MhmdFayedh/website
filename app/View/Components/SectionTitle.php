<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SectionTitle extends Component
{
    public function __construct(
        public string $id = '#'
        )
    {
    }

    public function render(): View|\Closure|string
    {
        return view('components.section-title');
    }
}
