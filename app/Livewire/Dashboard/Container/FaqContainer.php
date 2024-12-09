<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class FaqContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.dashboard.container.faq-container', [
            'faqs' => Faq::paginate(setting('pagination') ?? 8)
        ]);
    }
}