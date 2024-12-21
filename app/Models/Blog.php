<?php

namespace App\Models;
use App\Traits\HasTranslation;
use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory , ThumbnailModelAttribute;

    protected $fillable = [
        'title_ar',
        'title_en',
        'content_en',
        'content_ar',
        'image',
        'author_ar',
        'author_en',
        'job_title_ar',
        'job_title_en'
    ];

    // protected static function boot() {
    //     parent::boot();

    //     static::retrieved(fn(Blog $blog) => static::translation($blog));
    // }

    public function getTitleAttribute() {
        return app()->getLocale() === 'ar' ? $this->title_ar : $this->title_en;
    }
    public function getContentAttribute() {
        return app()->getLocale() === 'ar' ? $this->content_ar : $this->content_en;
    }
    public function getAuthorAttribute() {
        return app()->getLocale() === 'ar' ? $this->author_ar : $this->author_en;
    }
    public function getJobTitleAttribute() {
        return app()->getLocale() === 'ar' ? $this->job_title_ar : $this->job_title_en;
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class)->published();
    }
}
