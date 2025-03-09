<?php

namespace App\Livewire\Actions;

use App\Enums\TargetAudience;
use App\Livewire\Forms\QuestionnaireForm;
use App\Models\CorporateIdentity;
use App\Models\LogoType;
use App\Models\Questionnaire;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title(content: 'brand questionnaire')]
class QuestionnaireRequestForm extends Component
{
    public QuestionnaireForm $form;

    public $logoTypes = [];
    public $corporateIdentities = [];

    public function mount() {
        $this->logoTypes = Cache::remember('logo-types', now()->addYear(), fn() => LogoType::with('media')->get());
        $this->corporateIdentities = Cache::remember('corporate-identities', now()->addYear(), fn() =>  CorporateIdentity::all());
    }

    public function save()
    {
        $this->validate();
        DB::transaction(function () {
            $questionnaire = Questionnaire::create($this->form->except('corporate_identities'));

            $questionnaire->corporateIdentities()->attach($this->form->corporate_identities);


            notify_admins([
                'title' => 'استبيان العلامة التجارية جديد',
                'message' => 'استبيان من طرف العميل  ' . $questionnaire->client_name,
                'type' => Questionnaire::class
            ]);

            session()->flash('message', __('Questionnaire submitted successfully!'));
            $this->form->reset();
        });
    }

    public function rendered() {
        $this->dispatch('init-tagify');
    }

    #[Layout('layouts.base-layout')]
    public function render()
    {
        return view('livewire.actions.questionnaire-request-form', [
            'targetAudienceOptions' => TargetAudience::cases()
        ]);
    }
}