<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ServiceRequestForm extends Form
{
    #[Rule('required|string')]
    public string $name = '';

    #[Rule('required|numeric')]
    public string $phone = '';


    #[Rule('required|string')]
    public string $description = '';

}