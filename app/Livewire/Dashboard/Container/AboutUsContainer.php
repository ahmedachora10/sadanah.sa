<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\About;
use Livewire\Component;
use Livewire\WithPagination;

class AboutUsContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.dashboard.container.about-us-container', [
            'items' => About::with('media')->paginate(setting('pagination') ?? 8)
        ]);
    }
}