<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurService extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'image',
        'sort'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function (OurService $model) {
            $model->update(['sort' => $model->id]);
        });

        static::retrieved(fn(OurService $service) => self::translation($service));
    }
}