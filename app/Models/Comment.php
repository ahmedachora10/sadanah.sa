<?php

namespace App\Models;

use App\Enums\BLogStatus;
use Illuminate\Database\Eloquent\Builder;
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

    public function scopePublished(Builder $builder) {
        $builder->where('status', BLogStatus::Published->value);
    }
    public function scopeDraft(Builder $builder) {
        $builder->where('status', BLogStatus::Draft->value);
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'blog.title_ar' => $this->blog->title,
        ];
    }
}