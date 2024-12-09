<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class TagsContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.dashboard.container.tags-container', [
            'tags' => Tag::paginate(setting('pagination') ?? 8)
        ]);
    }
}