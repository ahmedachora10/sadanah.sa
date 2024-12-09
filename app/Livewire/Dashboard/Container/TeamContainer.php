<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class TeamContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.dashboard.container.team-container', [
            'members' => Team::paginate(setting('pagination') ?? 8)
        ]);
    }
}