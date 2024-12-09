<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class About extends Model implements HasMedia
{
    use HasFactory, HasTranslation, InteractsWithMedia;

    protected $fillable = ['description_ar', 'description_en'];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(About $about) => static::translation($about));
    }


    public function getThumbnailAttribute() {
        $media = $this->media?->first()?->getUrl();
        return $media ?? asset(setting('logo'));
    }
}