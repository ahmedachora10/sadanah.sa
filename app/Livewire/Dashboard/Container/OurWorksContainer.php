<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\OurWork;
use Livewire\Component;
use Livewire\WithPagination;

class OurWorksContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.dashboard.container.our-works-container', [
            'ourWorks' => OurWork::with('media')->paginate(setting('pagination') ?? 8)
        ]);
    }
}