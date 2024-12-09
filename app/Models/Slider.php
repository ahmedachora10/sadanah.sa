<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = ['title_ar', 'title_en', 'link', 'image_ar', 'image_en', 'styles','styles_ar', 'sort'];

    protected $casts = [
        'styles' => 'json',
        'styles_ar' => 'json'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function (Slider $model) {
            $model->update(['sort' => $model->id]);
        });

        // static::retrieved(fn(Slider $slider) => self::translation($slider));
    }
}
