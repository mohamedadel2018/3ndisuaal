<?php

namespace App\Http\Livewire\Frontend\Contact;

use App\Models\Social;
use App\Models\Contact as ContactModel;
use Livewire\Component;
use App\Models\ContactInfo;

class Contact extends Component
{

    public $name;
    public $email;
    public $message;

    public function send()
    {
        $this->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|string|max:150|unique:contacts,email',
            'message' => 'required|string|max:400',
        ], messages());

        ContactModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'is_read' => 1,
        ]);
        $this->resetErrorBag();
        $this->reset();
        session()->flash('success', __('app.message_sent'));
    }
    public function render()
    {
        $contactinfo = ContactInfo::latest()->first();
        $socials = Social::all();
        return view('livewire.frontend.contact.contact',[
            'contactinfo' => $contactinfo,
            'socials' => $socials,
        ]);
    }
}
