<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = [
        'image',
        'name_ar',
        'name_en',
        'job_name_ar',
        'job_name_en',
        'x',
        'snapchat',
        'tiktok',
        'instagram',
    ];

    protected static function boot() {
        parent::boot();

        static::retrieved(fn(Team $team) => static::translation($team));
    }
}