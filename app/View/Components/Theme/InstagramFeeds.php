<?php

namespace App\View\Components\Theme;

use App\Services\InstagramService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InstagramFeeds extends Component
{
    public array $feeds = [];
    public function __construct()
    {
        $this->feeds = app(InstagramService::class)->getImages();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.theme.instagram-feeds');
    }
}