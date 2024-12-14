<?php

namespace App\Models;

use App\Enums\JobType;
use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobPost extends Model
{
    use HasFactory, HasTranslation;

    public $fillable = [
        'job_city_id',
        'number',
        'type',
        'title_ar',
        'title_en',
        'responsibilities_ar',
        'responsibilities_en',
        'requirements_ar',
        'requirements_en',
        'experience_ar',
        'experience_en',
        'education_ar',
        'education_en',
    ];

    protected $casts = [
        'type' => JobType::class
    ];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(JobPost $jobPost) => static::translation($jobPost));
    }

    public function jobs() : HasMany {
        return $this->hasMany(JobRequest::class);
    }

    public function city() : BelongsTo {
        return $this->belongsTo(JobCity::class, 'job_city_id');
    }
}