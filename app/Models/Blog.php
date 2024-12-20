<?php

namespace App\Models;
use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory , ThumbnailModelAttribute, HasTranslation;

    protected $guarded = ['id'];

    protected static function boot() {
        parent::boot();

        static::retrieved(fn(Blog $blog) => static::translation($blog));
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
}