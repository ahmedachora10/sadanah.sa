<?php

namespace App\Livewire\Container;

use App\Models\InfluencerJoinRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class InfluencersRequests extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public ?InfluencerJoinRequest $request = null;

    public function mount() {
        Auth::user()->unreadnotifications()->whereJsonContains('data->type', InfluencerJoinRequest::class)?->update(['read_at' => now()]);
    }

    public function delete(InfluencerJoinRequest $influencerJoinRequest) {
        $influencerJoinRequest->delete();

        session()->put('success', trans('message.delete'));

        $this->dispatch('refresh-alert');
    }

    public function readMore(InfluencerJoinRequest $influencerJoinRequest) {
        $this->request = $influencerJoinRequest;
        $this->dispatch('open-modal', target:'#showMessage');
    }
    public function render()
    {
        return view('livewire.container.influencers-requests', [
            'data' => InfluencerJoinRequest::paginate(setting('pagination') ?? 8)
        ]);
    }
}
