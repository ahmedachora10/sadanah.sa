<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\CorporateIdentity;
use Livewire\Component;
use Livewire\WithPagination;

class CorporateIdentitiesContainer extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.dashboard.container.corporate-identities-container', [
            'identities' => CorporateIdentity::latest()->paginate(8)
        ]);
    }
}