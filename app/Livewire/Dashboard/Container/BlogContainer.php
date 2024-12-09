<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\Blog;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class BlogContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.dashboard.container.blog-container', [
            'members' => Blog::paginate(setting('pagination') ?? 8)
        ]);
    }
}