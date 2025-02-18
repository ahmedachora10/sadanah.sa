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
    #[Rule('required|string')]
    public string $second_name;

    #[Rule('required|email')]
    public string $email;

    #[Rule('required|numeric')]
    public string $phone;

    #[Rule('required|string')]
    public string $message;

    public string $view = 'livewire.contact-us-form';

    public function save() {
        $this->validate();
        $contact = ContactUs::create([
            'name' => "{$this->name} {$this->second_name}",
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => '',
            'message' => $this->message,
        ]);
        session()->flash('success', trans('message.create'));
        User::first()->notify(new UserActionNotification([
            'title' => trans('new message'),
            'message' => $contact->name . ' - ' . $contact->message,
            'type' => ContactUs::class,
        ]));
        $this->resetExcept('view');
    }

    public function render()
    {
        return view($this->view);
    }
}