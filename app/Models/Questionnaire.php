<?php

namespace App\Models;

use App\Enums\TargetAudience;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Questionnaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_type_id',
        // 'corporate_identity_id',
        'new_client',
        'client_name',
        'client_nationality',
        'company_name',
        'phone_number',
        'email',
        'brand_name',
        'brand_about',
        'project_type',
        'target_audience',
        'brand_personality',
        'competitors',
        'favorite_colors',
        'excluded_colors',
        'notes',
    ];


    protected $casts = [
        'target_audience' => TargetAudience::class,
        'new_client' => 'boolean',
        'favorite_colors' => 'array',
        'excluded_colors' => 'array',

    ];

    // TODO: add a middle table to add more logos types, corporate identities
    public function logoType()
    {
        return $this->belongsTo(LogoType::class);
    }

    public function corporateIdentities(): BelongsToMany
    {
        return $this->belongsToMany(CorporateIdentity::class, 'corporate_identity_questionnaire', 'corporate_identity_id', 'questionnaire_id');
    }

    public function clientColor(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->new_client ? (object) ['color' => 'warning', 'text' => __('Yes')] : (object) ['color' => 'secondary', 'text' => __('No')]
        );
    }
}
