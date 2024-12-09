<?php

namespace App\Models;

use App\Traits\HasTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tag extends Model
{
    use HasFactory, HasTranslation;

    protected $fillable = ['name_ar', 'name_en'];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(fn(Tag $tag) => static::translation($tag));
    }

    public function works() : HasMany {
        return $this->hasMany(OurWork::class);
    }
}