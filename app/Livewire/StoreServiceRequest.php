<?php

namespace App\Livewire;

use App\Livewire\Forms\ServiceRequestForm;
use App\Models\OurService;
use App\Models\ServiceRequest;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreServiceRequest extends Component
{
    use WithFileUploads;
    public ServiceRequestForm $form;

    public OurService $service;

    #[Validate('nullable|file')]
    public $attachments = null;

    public function save() {
        $this->validate();

        $request = ServiceRequest::create($this->form->all() + ['service_id' => $this->service->id]);

        if($this->attachments != null)
            $request->addMedia($this->attachments)->toMediaCollection();

        notify_admins([
            'title' => 'طلب خدمة جديد',
            'message' => $request->name . ' - ' . $request->description,
            'type' => ServiceRequest::class,
        ]);


        session()->flash('success', trans('common.request has been successfully'));
        // $this->dispatch('refresh-alert');

        $this->form->reset();
        $this->reset('attachments');
    }

    public function render()
    {
        return view('livewire.store-service-request');
    }
}