<?php

namespace App\Models;

use App\Traits\ThumbnailModelAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ServiceRequest extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['service_id', 'name', 'phone', 'description'];

    public function service() : BelongsTo {
        return $this->belongsTo(OurService::class, 'service_id');
    }

    public function getAttachmentAttribute() {
        return $this->getFirstMedia()?->getUrl() ?? '';
    }
}