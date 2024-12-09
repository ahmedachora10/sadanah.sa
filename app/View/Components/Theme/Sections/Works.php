<?php

namespace App\View\Components\Theme\Sections;

use App\Models\OurWork;
use App\Models\Tag;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Works extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.sections.works', [
            'works' => OurWork::with(['media', 'tag'])->get(),
            'tags' => Tag::withExists(['works'])->get()
        ]);
    }
}