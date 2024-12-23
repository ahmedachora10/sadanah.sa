<?php

namespace App\Livewire;

use App\Livewire\Forms\JobRequestForm;
use App\Models\JobCity;
use App\Models\JobPost;
use App\Models\JobRequest;
use App\Models\User;
use App\Notifications\UserActionNotification;
use App\Services\UploadFileService;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class StoreJobRequest extends Component
{
    use WithFileUploads;

    protected ?UploadFileService $uploadFileService;

    public JobRequestForm $form;
    public ?JobPost $jobPost = null;

    public $jobs = [];
    public $jobCities = [];

    #[Validate([
        'attachments.*' => 'nullable|file',
    ])]
    public $attachments = [];

    #[Validate('required|file')]
    public $cv = null;

    public function mount() {
        $this->uploadFileService = new UploadFileService;
        $this->jobs = JobPost::all();
        $this->jobCities = JobCity::all();
    }
    #[On('add-job-request')]
    public function setJobRequest(JobPost $jobPost) {
        $this->jobPost = $jobPost;
        $this->dispatch('open-modal', taraget: "#confirmForm");
    }

    public function save() {
        $this->validate();

        $this->uploadFileService = new UploadFileService;

        DB::transaction(function () {
            $jobRequest = JobRequest::create($this->form->all() + ['cv' => $this->uploadFileService->store($this->cv, 'jobs/cv')]);

            if(count($this->attachments) > 0) {
                foreach ($this->attachments as $attachment) {
                    $jobRequest->attachments()->create(['file' => $this->uploadFileService->store($attachment, 'jobs/attachments')]);
                }
            }

            User::first()->notify(new UserActionNotification([
                'title' => trans('new job request'),
                'message' =>  '"'.$jobRequest?->jobPost?->title.'"',
                'type' => JobRequest::class,
            ]));

            session()->flash('success', trans('message.create'));
            $this->form->reset();
            $this->reset('attachments');
        });

        $this->dispatch('close-modal', target:'#confirmForm');

    }

    public function render()
    {
        return view('livewire.store-job-request');
    }
}
