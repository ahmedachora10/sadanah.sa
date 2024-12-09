<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = ['title_en', 'title_ar', 'count'];

    protected static function boot() {
        parent::boot();

        static::retrieved(fn(Statistic $statistic) => static::translation($statistic));
    }
}