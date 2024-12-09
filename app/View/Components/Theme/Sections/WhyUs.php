<?php

namespace App\View\Components\Theme\Sections;

use App\Models\Certificate;
use App\Models\WhyUs as ModelsWhyUs;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhyUs extends Component
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
        return view('components.theme.sections.why-us', [
            'model' => ModelsWhyUs::first(),
            'certificates' => Certificate::all()
        ]);
    }
}