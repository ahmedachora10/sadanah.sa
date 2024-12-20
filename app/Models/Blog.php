<?php

namespace App\Models;
use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory , ThumbnailModelAttribute, HasTranslation;

    protected $guarded = ['id'];

    protected static function boot() {
        parent::boot();

        static::retrieved(fn(Blog $blog) => static::translation($blog));
    }
}