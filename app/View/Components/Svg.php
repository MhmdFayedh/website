<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Svg extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $name,
        public int $width = 50,
        public int $height = 50
        )
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return 
     */
    public function render(): View|\Closure|string
    {
        return view('components.svg');
    }
}
