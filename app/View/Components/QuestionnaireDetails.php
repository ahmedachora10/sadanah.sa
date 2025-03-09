<?php

namespace App\View\Components;

use App\Models\Questionnaire;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QuestionnaireDetails extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct( public ?Questionnaire $questionnaire = null )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.questionnaire-details');
    }
}