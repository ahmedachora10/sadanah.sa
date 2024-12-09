<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\ContactUs;
use App\Models\Support;
use Livewire\Component;
use Livewire\WithPagination;

class SupportsContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.dashboard.container.supports-container', [
            'contacts' => Support::paginate(setting('pagination') ?? 8)
        ]);
    }
}