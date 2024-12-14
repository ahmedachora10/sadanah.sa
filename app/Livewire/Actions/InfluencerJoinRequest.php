<?php

namespace App\Livewire\Actions;

use Livewire\Component;

class InfluencerJoinRequest extends Component
{

    public array $socialMediaPlatforms = [
        'instagram',
        'snapchat',
        'tiktok',
        'youtube',
        'x',
    ];

    public function render()
    {
        return view('livewire.actions.influencer-join-request');
    }
}