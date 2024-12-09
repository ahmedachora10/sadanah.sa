<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
    use HasFactory, HasTranslation;

    protected $fillable = [
        'section',
        'title_ar',
        'title_en',
        'subtitle_ar',
        'subtitle_en',
    ];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(Headline $headline) => static::translation($headline));
    }

    public function scopeSection(Builder $builder, string $section)  {
        $builder->where('section', $section);
    }
}