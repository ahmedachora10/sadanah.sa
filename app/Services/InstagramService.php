<?php

namespace App\Services;

use Dymantic\InstagramFeed\InstagramFeed;
use Laravel\Socialite\Facades\Socialite;

class InstagramService {
    public function __construct(
        private Socialite $socialite
    ) {}
    public function auth() {
        return $this->socialite::driver('instagram')
            ->setScopes(['instagram_business_basic'])
            ->redirect();
    }

    private function getProfile() {
        return $this->socialite::driver('instagram')->user();
    }

    public function getImages() : array  {
        $feeds = $this->getProfile();

        $images = [];
        foreach($feeds as $index => $feed) {
            if (!strtolower($feed?->type) == 'image')
                continue;

            if ($index > 5)
                break;

            $images[$index]['image'] = $feed->thumbnail_url != '' ? $feed->thumbnail_url : $feed->url;
            $images[$index]['permalink'] = $feed->permalink;
        }

        return $images;
    }
}