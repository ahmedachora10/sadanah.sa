<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Toast extends Component
{
    public string $message = '';
    public string $type = 'success';

    #[On('toast-message')]
    public function setMessage(string $message, string $type = 'success'): void {
        $this->message = $message;
        $this->type = $type;
    }
    public function render()
    {
        return view('livewire.toast');
    }
}