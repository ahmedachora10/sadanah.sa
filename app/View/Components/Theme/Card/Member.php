<?php

namespace App\View\Components\Theme\Card;

use App\Models\Team;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Member extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Team $member
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.card.member');
    }
}