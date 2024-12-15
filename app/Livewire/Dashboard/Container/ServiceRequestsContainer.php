<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\ServiceRequest;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceRequestsContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public ?ServiceRequest $request = null;

    public function mount() {
        User::first()->unreadnotifications()->whereJsonContains('data->type',ServiceRequest::class)?->update(['read_at' => now()]);
    }

    public function delete(ServiceRequest $serviceRequest) {
        $serviceRequest->delete();

        session()->put('success', trans('message.delete'));

        $this->dispatch('refresh-alert');
    }

    public function readMore(ServiceRequest $serviceRequest) {
        $this->request = $serviceRequest;
        $this->dispatch('open-modal', target:'#showMessage');
    }
    public function render()
    {
        return view('livewire.dashboard.container.service-requests-container',[
            'requests' => ServiceRequest::with(['service'])->paginate(setting('pagination') ?? 8)
        ]);
    }
}