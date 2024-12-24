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
            'access_token' => 'AQBZCcHC1X330ZjbVxLNZ9ZP_TQeBBJakjML_J_Y_AeufCty3CQl_994RskX46Ea1vK3yeAXTWGSGeKyVkNgmSLAmP4K5XhRjk3Q5ibAgyUhq7Y36mWFMe_mZfOiV7IGk70Ds2zzr_mMbFkZl2DSCT0wkt_V0urzsIWwgqEtpfz5XUEXlFKrppXfz6SXwLhbJPcLwb5OQv92qdRODG9YHD66qAn7nEMTt04VLDHrdvqxtg#_',
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