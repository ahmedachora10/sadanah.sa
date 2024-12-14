<?php

namespace App\Livewire\Actions;

use App\Livewire\Forms\InfluencerJoinRequestForm;
use Livewire\Component;

class InfluencerJoinRequest extends Component
{
    public InfluencerJoinRequestForm $form;
    public array $socialMediaPlatforms = [
        'instagram',
        'snapchat',
        'tiktok',
        'youtube',
        'x',
    ];

    public function save() {

        $this->validate();

    }

    public function render()
    {
        return view('livewire.actions.influencer-join-request');
    }
}