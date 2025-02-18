<?php

namespace App\Livewire\Actions;

use App\Livewire\Forms\InfluencerJoinRequestForm;
use App\Models\InfluencerJoinRequest as ModelsInfluencerJoinRequest;
use Livewire\Attributes\Validate;
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

    #[Validate('nullable|file')]
    public $attachments = null;

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

        $request = ModelsInfluencerJoinRequest::create([
            'username' => $this->form->username,
            'phone' => $this->form->phone,
            'email' => $this->form->email,
            'content_provided' => $this->form->content_provided,
            'interests' => $this->form->interests,
        ] + $data);

        if($this->attachments != null)
            $request->addMedia($this->attachments)->toMediaCollection();

        notify_admins([
            'title' => 'طلب انضمام جديد',
            'message' => $request->username,
            'type' => ModelsInfluencerJoinRequest::class,
        ]);

        session()->put('success', trans('common.request has been successfully'));
        $this->dispatch('refresh-alert');

        $this->form->reset();
        $this->reset('attachments');

    }

    public function render()
    {
        return view('livewire.actions.influencer-join-request');
    }
}