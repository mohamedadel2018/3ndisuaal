<?php

namespace App\Http\Livewire\Admin\Contact;

use Livewire\Component;
use App\Models\Contact;

class Show extends Component
{
    public $contact;

    public function mount(Contact $contact)
    {
         permation('contact.view');
        $this->contact = $contact;
    }
    public function render()
    {
        return view('livewire.admin.contact.show')->layout(ADMIN_LAYOUT);
    }

}
