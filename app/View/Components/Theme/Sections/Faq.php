<?php

namespace App\View\Components\Theme\Sections;

use App\Models\Faq as ModelsFaq;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Faq extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.sections.faq', [
            'faqs' => ModelsFaq::all()
        ]);
    }
}