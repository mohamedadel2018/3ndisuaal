<?php

namespace App\Http\Livewire\Admin\Social;

use App\Models\Social;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{


    public $icon, $link_ar, $link_en, $link_id, $selected_id;


    public function mount()
    {
         permation('social.create');
    }

    public function store()
    {
        permation('social.create');
        $this->validate([
            'icon' => 'required|min:1|string',
            'link_ar' => 'required|min:1|string',
            'link_en' => 'required|min:1|string',
            'link_id' => 'required|min:1|string',
        ], messages());
        Social::create([
            'icon' => $this->icon,
            'link_ar' => $this->link_ar,
            'link_en' => $this->link_en,
            'link_id' => $this->link_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_saved'));
        $this->reset();
        $this->resetValidation();
        // REDIRECT TO
        return redirect()->route('admin.socials');
    }

    public function render()
    {
        return view('livewire.admin.social.create')->layout(ADMIN_LAYOUT);
    }

}
