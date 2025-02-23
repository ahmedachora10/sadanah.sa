<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\ContactUs;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ContactUsContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public string $content = '';

    public function mount() {
        Auth::user()->unreadnotifications()->whereJsonContains('data->type', ContactUs::class)?->update(['read_at' => now()]);
    }

    public function delete(ContactUs $contact) {
        $contact->delete();

        session()->put('success', trans('message.delete'));

        $this->dispatch('refresh-alert');
    }

    public function readMore(ContactUs $contact) {
        $this->content = $contact->message;
        $this->dispatch('open-modal', target:'#showMessage');
    }

    public function render()
    {
        return view('livewire.dashboard.container.contact-us-container', [
            'data' => ContactUs::latest()->paginate(setting('pagination') ?? 8)
        ]);
    }
}