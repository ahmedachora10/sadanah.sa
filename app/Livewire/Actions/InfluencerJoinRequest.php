<?php

namespace App\Livewire\Actions;

use App\Livewire\Forms\InfluencerJoinRequestForm;
use App\Models\InfluencerJoinRequest as ModelsInfluencerJoinRequest;
use App\Models\User;
use App\Notifications\UserActionNotification;
use App\Services\UploadFileService;
use Livewire\Component;
use Livewire\WithFileUploads;

class InfluencerJoinRequest extends Component
{
    use WithFileUploads;
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
                'username' => $this->form->{$item . '_username'},
                'link' => $this->form->{$item . '_link'},
                'followers' => $this->form->{$item . '_followers'},
            ];
        }

        // dd($this->form->all());

        $request = ModelsInfluencerJoinRequest::create([
            'username' => $this->form->username,
            'phone' => $this->form->phone,
            'email' => $this->form->email,
            'content_provided' => $this->form->content_provided,
            'interests' => $this->form->interests,
        ] + $data);

        if($this->form->attachments != null)
            $request->addMedia($this->form->attachments)->toMediaCollection();

        User::first()->notify(new UserActionNotification([
            'title' => trans('new message'),
            'message' => $request->username,
            'type' => ModelsInfluencerJoinRequest::class,
        ]));

        session()->put('success', '');
        $this->dispatch('refresh-alert');

        $this->form->reset();

    }

    public function render()
    {
        return view('livewire.actions.influencer-join-request');
    }
}