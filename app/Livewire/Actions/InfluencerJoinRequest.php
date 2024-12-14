<?php

namespace App\Livewire\Actions;

use App\Livewire\Forms\InfluencerJoinRequestForm;
use App\Models\InfluencerJoinRequest as ModelsInfluencerJoinRequest;
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

        $data = [];

        foreach($this->socialMediaPlatforms as $item) {
            $data[$item] = [
                $item . '_username' => $this->form->${$item . '_username'},
                $item . '_link' => $this->form->${$item . '_link'},
                $item . '_followers' => $this->form->${$item . '_followers'},
            ];
        }

        ModelsInfluencerJoinRequest::create([
            'username' => $this->form->username,
            'phone' => $this->form->phone,
            'email' => $this->form->email,
            'content_provided' => $this->form->content_provided,
            'interests' => $this->form->interests,
        ] + $data);

        $this->dispatch('toast-message', message: trans('message.create'));

        $this->form->reset();

    }

    public function render()
    {
        return view('livewire.actions.influencer-join-request');
    }
}