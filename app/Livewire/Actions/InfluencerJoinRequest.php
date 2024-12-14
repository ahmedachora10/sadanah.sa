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
        $rules = [];

        foreach ($this->socialMediaPlatforms as $platform) {
            $rules["form.{$platform}_username"] = 'required|string|max:255';
            $rules["form.{$platform}_link"] = 'required|url|max:500';
            $rules["form.{$platform}_followers"] = 'required|integer|min:0';
        }

        $this->validate($rules);

        $this->form->validate();

    }

    public function render()
    {
        return view('livewire.actions.influencer-join-request');
    }
}