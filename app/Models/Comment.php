<?php

namespace App\Models;

use App\Enums\BLogStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Comment extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'blog_id',
        'name',
        'email',
        'message',
        'status'
    ];

    protected $casts = [
        'status' => BLogStatus::class
    ];

    public function blog(): BelongsTo {
        return $this->belongsTo(Blog::class);
    }

    public function toSearchableArray()
    {
        return [
            'name',
            'email',
            'message',
            'blog.title_ar',
            'blog.title_en'
        ];
    }
}