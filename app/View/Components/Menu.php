<?php

namespace App\View\Components;

use Closure;
use App\Models\MenuLink;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        /** @var MenuLink[] $links */
        $links = MenuLink::published()->get()->toTree()->sortBy('position');

        return view('components.menu', ['links' => $links]);
    }
}
