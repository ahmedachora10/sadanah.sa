<?php

namespace App\Livewire\Forms;

use Illuminate\Http\UploadedFile;
use Livewire\Attributes\Validate;
use Livewire\Form;

class InfluencerJoinRequestForm extends Form
{
    #[Validate('required|min:2|string')]
    public string $username = '';

    #[Validate('required|numeric')]
    public string $phone = '';

    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|min:3|string')]
    public string $content_provided = '';

    #[Validate('required|string')]
    public string $interests = '';


    #[Validate('required|string|max:255')]
    public string $instagram_username = '';

    #[Validate('required|url|max:500')]
    public string $instagram_link = '';

    #[Validate('required|integer|min:0')]
    public int $instagram_followers = 0;

    #[Validate('required|string|max:255')]
    public string $tiktok_username = '';

    #[Validate('required|url|max:500')]
    public string $tiktok_link = '';

    #[Validate('required|integer|min:0')]
    public int $tiktok_followers = 0;

    #[Validate('required|string|max:255')]
    public string $x_username = '';

    #[Validate('required|url|max:500')]
    public string $x_link = '';

    #[Validate('required|integer|min:0')]
    public int $x_followers = 0;

    #[Validate('required|string|max:255')]
    public string $youtube_username = '';

    #[Validate('required|url|max:500')]
    public string $youtube_link = '';

    #[Validate('required|integer|min:0')]
    public int $youtube_followers = 0;

    #[Validate('required|string|max:255')]
    public string $snapchat_username = '';

    #[Validate('required|url|max:500')]
    public string $snapchat_link = '';

    #[Validate('required|integer|min:0')]
    public int $snapchat_followers = 0;

    #[Validate('nullable|file')]
    public ?UploadedFile $attachments = null;
}