<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Card extends Component
{
    public function __construct(
        public string $imgSrc
        )
    {
    }

    public function render(): View|\Closure|string
    {
        return view('components.card');
    }
}
