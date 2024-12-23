<?php

namespace App\Services;

use Dymantic\InstagramFeed\InstagramFeed;

class InstagramService {
    const PROFILE_NAME = 'sadnahco';

    public static function auth() {
        return \Dymantic\InstagramFeed\Profile::new(self::PROFILE_NAME)->getInstagramAuthUrl();
    }

    private function getProfile() {
        return InstagramFeed::for(self::PROFILE_NAME, 6);
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