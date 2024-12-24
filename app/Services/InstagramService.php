<?php

namespace App\Services;

use Dymantic\InstagramFeed\InstagramFeed;
use Illuminate\Support\Facades\Http;
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

    public function getProfile() {
        return $this->socialite::driver('instagram')
        ->user();
    }


    public function getPosts() {
        $endpoint = 'https://graph.instagram.com/me/media';
        $fields = 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp';

        $response = Http::get($endpoint, [
            'fields' => $fields,
            'access_token' => setting('instagram_token')
        ]);

        return $response->json();
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