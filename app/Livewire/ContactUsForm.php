<?php

namespace App\Livewire;

use App\Models\ContactUs;
use App\Models\User;
use App\Notifications\UserActionNotification;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactUsForm extends Component
{
    #[Rule('required|string')]
    public string $name;

    #[Rule('required|email')]
    public string $email;

    #[Rule('required|numeric')]
    public string $phone;

    #[Rule('required|string')]
    public string $subject;

    #[Rule('required|string')]
    public string $message;

    public string $view = 'livewire.contact-us-form';

    public function save() {
        $contact = ContactUs::create($this->validate());
        session()->flash('success', trans('message.create'));
        User::first()->notify(new UserActionNotification([
            'title' => trans('new message'),
            'message' => $contact->name . ' - ' . $contact->subject,
            'type' => ContactUs::class,
        ]));
        $this->resetExcept('view');
    }

    public function render()
    {
        return view($this->view);
    }
}
