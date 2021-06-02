<?php

namespace App\Http\Livewire\Admin\Social;

use App\Models\Social;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{


    public $icon, $link_ar, $link_en, $link_id, $selected_id, $social;

    public function mount(Social $social)
    {
         permation('social.edit');
        $this->social = $social;
        $this->icon = $this->social->icon;
        $this->link_ar = $this->social->link_ar;
        $this->link_en = $this->social->link_en;
        $this->link_id = $this->social->link_id;
        $this->selected_id = $this->social->id;
    }


    public function update()
    {
        permation('social.edit');
        $this->validate([
            'icon' => 'required|min:1|string',
            'link_ar' => 'required|min:1|string',
            'link_en' => 'required|min:1|string',
            'link_id' => 'required|min:1|string',
        ], messages());
        $social = Social::findOrFail($this->selected_id);
        $social->update([
            'icon' => $this->icon,
            'link_ar' => $this->link_ar,
            'link_en' => $this->link_en,
            'link_id' => $this->link_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.socials');
    }

    public function render()
    {
        return view('livewire.admin.social.edit')->layout(ADMIN_LAYOUT);
    }

}
