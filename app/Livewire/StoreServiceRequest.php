<?php

namespace App\Livewire;

use App\Livewire\Forms\ServiceRequestForm;
use App\Models\OurService;
use App\Models\ServiceRequest;
use App\Models\User;
use App\Notifications\UserActionNotification;
use Livewire\Component;

class StoreServiceRequest extends Component
{
    public ServiceRequestForm $form;

    public OurService $service;

    public function save() {
        $this->validate();

        ServiceRequest::create($this->form->all() + ['service_id' => $this->service->id]);

        User::first()->notify(new UserActionNotification([
            'title' => '',
            'message' => '',
            'type' => ServiceRequest::class,
        ]));

        session()->flash('success', trans('message.create'));
        $this->form->reset();
    }

    public function render()
    {
        return view('livewire.store-service-request');
    }
}