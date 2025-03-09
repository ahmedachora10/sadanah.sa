<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaGallery extends Component
{
    public array|MediaCollection $media = [];

    public function remove(Media $media) {
        $media->delete();

        if($this->media instanceof MediaCollection) {
            $this->media = $this->media->filter(function ($item) use ($media) {
                return $item->id !== $media->id;
            });
        }
    }
    public function render()
    {
        return view('livewire.media-gallery');
    }
}