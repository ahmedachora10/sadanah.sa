<?php

namespace App\Models;

use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, ThumbnailModelAttribute, HasTranslation;

    protected $fillable = [
        'image',
        'name',
        'price',
        'description',
    ];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(Service $service) => self::translation($service));
    }
}