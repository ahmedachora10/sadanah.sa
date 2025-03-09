<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateIdentity extends Model
{
    use HasFactory;

    protected $fillable = ['name_ar', 'name_en'];

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn () => app()->getLocale() == 'ar' ? $this->name_ar : $this->name_en,
        );
    }
}