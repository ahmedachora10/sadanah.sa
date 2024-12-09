<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\OurTeam;
use Livewire\Component;
use Livewire\WithPagination;

class OurTeamContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.dashboard.container.our-team-container', [
            'members' => OurTeam::paginate(setting('pagination') ?? 8)
        ]);
    }
}