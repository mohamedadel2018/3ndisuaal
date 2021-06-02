<?php

namespace App\Http\Livewire\Admin\Contactinfo;

use Livewire\Component;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{

    public $email;
    public $phone;
    public $contactinfo;
    public $selectedId;

    public function mount(ContactInfo $contactinfo)
    {
         permation('contact.info.edit');
        $this->contactinfo = $contactinfo;
        // dd($this->contactinfo->phone);
        $this->selectedId = $this->contactinfo->id;
        $this->email = $this->contactinfo->email;
        $this->phone = $this->contactinfo->phone;
    }


    public function update()
    {
        permation('contact.info.edit');
        $this->validate([
            'email' => 'required|string',
            'phone' => 'required|string',
        ], messages());
        $contactInfo = ContactInfo::findOrFail($this->selectedId);
        $contactInfo->update(
            [
                'email' => $this->email,
                'phone' => $this->phone,
                'admin_id' => Auth::user()->id,
            ]
        );

        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.contactinfo.index');
    }

    public function render()
    {
        return view('livewire.admin.contactinfo.edit')->layout(ADMIN_LAYOUT);
    }

}
