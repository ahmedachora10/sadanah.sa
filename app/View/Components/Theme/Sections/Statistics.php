<?php

namespace App\View\Components\Theme\Sections;

use App\Models\Statistic;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Statistics extends Component
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
        return view('components.theme.sections.statistics', [
            'statistics' => Statistic::all()
        ]);
    }
}