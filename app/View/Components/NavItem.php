<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavItem extends Component
{
    public function __construct(
        public string $link = '#',
        public string $name = 'غير معرف'
        )
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-item');
    }
}
