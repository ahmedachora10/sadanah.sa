<?php

namespace App\Models;

use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceRequest extends Model
{
    use HasFactory, ThumbnailModelAttribute;

    protected $fillable = ['service_id', 'name', 'phone', 'city', 'description'];

    public function service() : BelongsTo {
        return $this->belongsTo(OurService::class, 'service_id');
    }
}