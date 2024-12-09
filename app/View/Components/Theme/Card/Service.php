<?php

namespace App\View\Components\Theme\Card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Service extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $title = '',
        public ?string $description = '',
        public ?string $image = '',
        public ?string $link = '',
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.card.service');
    }
}
