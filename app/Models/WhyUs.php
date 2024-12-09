<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhyUs extends Model
{
    use HasFactory, HasTranslation;

    protected $fillable = ['properties_en', 'properties_ar'];

    protected $casts = [
        'properties_ar' => 'json',
        'properties_en' => 'json',
        'properties' => 'json',
    ];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(WhyUs $whyUs) => static::translation($whyUs));
    }
}