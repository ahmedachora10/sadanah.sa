<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfluencerJoinRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'phone',
        'email',
        'content_provided',
        'interests',
        'snapchat',
        'instagram',
        'tiktok',
        'x',
        'youtube'
    ];

    protected $casts = [
        'snapchat' => 'json',
        'instagram' => 'json',
        'tiktok' => 'json',
        'x' => 'json',
        'youtube' => 'json',
    ];
}