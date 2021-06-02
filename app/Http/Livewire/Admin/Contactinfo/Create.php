<?php

namespace App\Http\Livewire\Admin\Contactinfo;

use Livewire\Component;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{

    public $email;
    public $phone;

    public function mount()
    {
        permation('contact.info.create');
    }

    public function store()
    {
        permation('contact.info.create');
        $this->validate([
            'email' => 'required|string',
            'phone' => 'required|string',
        ]);

        ContactInfo::create([
            'email' => $this->email,
            'phone' => $this->phone,
            'admin_id' => Auth::user()->id,
        ], messages());
        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.contactinfo.index');
    }

    public function render()
    {
        return view('livewire.admin.contactinfo.create')->layout(ADMIN_LAYOUT);
    }
}
