<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobPost extends Model
{
    use HasFactory, HasTranslation;

    public $fillable = ['title_ar', 'title_en'];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(JobPost $jobPost) => static::translation($jobPost));
    }

    public function jobs() : HasMany {
        return $this->hasMany(JobRequest::class);
    }
}
