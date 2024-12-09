<?php

namespace App\View\Components;

use App\Models\OurWork;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WorkSection extends Component
{
    public $works = [];
    /**
     * Create a new component instance.
     */
    public function __construct(public OurWork $item)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.work-section');
    }
}