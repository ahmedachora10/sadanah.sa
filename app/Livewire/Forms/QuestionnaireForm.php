<?php

namespace App\Livewire\Forms;

use App\Enums\TargetAudience;
use Illuminate\Validation\Rules\Enum;
use Livewire\Attributes\Validate;
use Livewire\Form;

class QuestionnaireForm extends Form
{
    #[Validate(['required', 'exists:logo_types,id'])]
    public ?int $logo_type_id = null;

    #[Validate(['corporate_identities' => ['required', 'array'], 'corporate_identities.*' => 'exists:corporate_identities,id'])]
    public array $corporate_identities = [];

    #[Validate(['boolean'])]
    public bool $new_client = true;

    #[Validate(['required', 'string', 'max:255'])]
    public string $client_name = '';

    #[Validate(['required', 'string', 'max:255'])]
    public string $client_nationality = '';

    #[Validate(['required', 'string', 'max:255'])]
    public string $company_name = '';

    #[Validate(['required', 'string', 'max:20'])]
    public string $phone_number = '';

    #[Validate(['required', 'email'])]
    public string $email = '';

    #[Validate(['required', 'string', 'max:255'])]
    public string $brand_name = '';

    #[Validate(['required', 'string'])]
    public string $brand_about = '';

    #[Validate(['required', 'string'])]
    public string $project_type = '';

    #[Validate(['required', new Enum(TargetAudience::class)])]
    public ?TargetAudience $target_audience = null;

    #[Validate(['required', 'string'])]
    public string $brand_personality = '';

    #[Validate(['required', 'string'])]
    public string $competitors = '';

    #[Validate(['required','array'])]
    public array $favorite_colors = [];

    #[Validate(['required','array'])]
    public array $excluded_colors = [];

    #[Validate(['nullable', 'string'])]
    public string $notes = '';

}