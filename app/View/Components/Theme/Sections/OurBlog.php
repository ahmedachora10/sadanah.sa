<?php

namespace App\View\Components\Theme\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class OurBlog extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Collection $visions
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.sections.our-blog');
    }
}