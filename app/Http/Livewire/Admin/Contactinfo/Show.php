<?php

namespace App\Http\Livewire\Admin\Contactinfo;

use Livewire\Component;
use App\Models\ContactInfo;

class Show extends Component
{

    public $contactinfo;

    public function mount(ContactInfo $contactinfo)
    {
         permation('contact.info.view');
        $this->contactinfo = $contactinfo;
    }
    public function render()
    {
        return view('livewire.admin.contactinfo.show')->layout(ADMIN_LAYOUT);
    }

}
