<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class InfluencerJoinRequest extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'username',
        'phone',
        'email',
        'content_provided',
        'interests',
        'snapchat',
        'instagram',
        'tiktok',
        'x',
        'youtube'
    ];

    protected $casts = [
        'snapchat' => 'json',
        'instagram' => 'json',
        'tiktok' => 'json',
        'x' => 'json',
        'youtube' => 'json',
    ];

    public function getThumbnailAttribute() {
        return $this->getFirstMedia()?->getUrl() ?? '';
    }
}
