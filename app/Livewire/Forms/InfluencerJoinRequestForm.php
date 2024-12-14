<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class InfluencerJoinRequestForm extends Form
{
    #[Validate('required|min:2|string')]
    public string $username = '';

    #[Validate('required|numirec')]
    public string $phone = '';

    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|min:3|string')]
    public string $content_provided = '';

    #[Validate('required|string')]
    public string $interests = '';

    #[Validate('nullable|file')]
    public string $attachments = '';
}