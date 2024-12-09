<?php

namespace App\View\Components\Theme\Sections;

use App\Models\About as ModelsAbout;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class About extends Component
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
        return view('components.theme.sections.about', [
            'about' => ModelsAbout::with('media')->first()
        ]);
    }
}