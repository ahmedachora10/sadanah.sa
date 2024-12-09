<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\Vision;
use Livewire\Component;
use Livewire\WithPagination;

class VisionsContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        // dd(Vision::first());
        return view('livewire.dashboard.container.visions-container', [
            'visions' =>  Vision::paginate(setting('pagination') ?? 8)
        ]);
    }
}