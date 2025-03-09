<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\LogoType;
use Livewire\Component;
use Livewire\WithPagination;

class LogosContainer extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.dashboard.container.logos-container', [
            'logos' => LogoType::latest()->paginate(8)
        ]);
    }
}