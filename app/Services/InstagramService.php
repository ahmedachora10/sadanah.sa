<?php

namespace App\Services;

use Dymantic\InstagramFeed\InstagramFeed;
use Exception;
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
        try {
            $endpoint = 'https://graph.instagram.com/me/media';
            $fields = 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp';

            $response = Http::get($endpoint, [
                'fields' => $fields,
                'access_token' => setting('instagram_token')
            ]);

            return collect($response->json()['data'] ?? [])
            ->filter(
                callback: fn($item) => strtolower($item['media_type']) === 'image'
            )
            ->take(limit: setting('instagram_posts_count') ?? 6)
            ->map(
                callback: fn($item) => [
                    'image' => $item['thumbnail_url'] ?? $item['media_url'],
                    'permalink' => $item['permalink'],
                ]
            )
            ->toArray();
        } catch(Exception $e)
        {
            logger($e->getMessage());
            return $e->getMessage();
        }
    }

    public function getImages() : array  {
        $feeds = $this->getPosts();

        if (!is_array($feeds))
            return [];

        return $feeds;
    }
}