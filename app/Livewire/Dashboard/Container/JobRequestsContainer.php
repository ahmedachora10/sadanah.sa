<?php

namespace App\Livewire\Dashboard\Container;

use App\Models\JobRequest;
use App\Models\User;
use App\Services\UploadFileService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class JobRequestsContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public ?JobRequest $jobRequest = null;

    public string $search = '';

    public function mount() {
        User::first()->unreadnotifications()->whereJsonContains('data->type', JobRequest::class)?->update(['read_at' => now()]);
    }

    public function delete(JobRequest $jobRequest) {

        DB::transaction(function () use($jobRequest) {
            $uploadFileService = new UploadFileService;

            $uploadFileService->delete($jobRequest->cv);

            foreach ($jobRequest->attachments as $attachment) {
                $uploadFileService->delete($attachment->file);
            }

            $jobRequest->delete();
        });

        session()->put('success', trans('request has been send'));

        $this->dispatch('refresh-alert');
    }

    public function getAttachments(JobRequest $jobRequest) {
        $this->jobRequest = $jobRequest;
        $this->dispatch('open-modal', target: '#showAttachments');
    }

    public function render()
    {
        return view('livewire.dashboard.container.job-requests-container', [
            'jobRequests' => JobRequest::search($this->search)
            ->query(fn (Builder $query) => $query->with(['attachments', 'jobPost', 'jobCity']))
            ->paginate(setting('pagination') ?? 8)
        ]);
    }
}