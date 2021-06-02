<?php

namespace App\Http\Livewire\Admin\Contact;

use Livewire\Component;

class Create extends Component
{
    public function render()
    {
         permation('.create');
        return view('livewire.admin.contact.create');
    }
}
