<?php

namespace App\Livewire\Dashboard;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaContainer extends Component
{
    public Model $model;

    public Collection|array $images = [];

    public function delete(int $id) {
        if ($img =  Media::find($id)) {

            $img->delete();

            $this->images->find($id)?->delete();
            $this->images = $this->images->fresh();

            session()->put('success', trans('message.delete'));
            $this->dispatch('refresh-alert');
            $this->dispatch('$refresh');
        }
    }

    #[On('refresh-media')]
    public function refreshMedia() {
        $this->images = $this->model->images;
    }
    public function render()
    {
        return view('livewire.dashboard.media-container');
    }
}