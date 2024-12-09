<?php

namespace App\View\Components;

use App\Models\OurService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicesSection extends Component
{
    public $services = [];
    /**
     * Create a new component instance.
     */
    public function __construct(public int $pagination = 0)
    {
        if($pagination > 0) {
            $this->services = OurService::paginate($pagination);
        } else {
            $this->services = OurService::all();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services-section');
    }
}
