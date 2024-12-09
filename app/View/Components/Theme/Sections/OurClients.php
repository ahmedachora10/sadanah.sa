<?php

namespace App\View\Components\Theme\Sections;

use App\Models\OurClient;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class OurClients extends Component
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
        return view('components.theme.sections.our-clients', [
            'clients' => OurClient::all()
        ]);
    }
}