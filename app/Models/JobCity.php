<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobCity extends Model
{
    use HasFactory, HasTranslation;

    public $fillable = ['name_ar', 'name_en'];

    protected static function boot() {
        parent::boot();

        static::retrieved(fn(JobCity $jobCity) => static::translation($jobCity));
    }

    public function jobs() : HasMany {
        return $this->hasMany(JobRequest::class);
    }
}