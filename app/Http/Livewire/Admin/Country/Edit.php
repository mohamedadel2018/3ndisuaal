<?php

namespace App\Http\Livewire\Admin\Country;

use App\Models\Country;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{


    public $name_ar, $name_en, $name_id, $selected_id, $country;

    public function mount(Country $country)
    {
         permation('country.edit');
        $this->country = $country;
        $this->name_ar = $this->country->name_ar;
        $this->name_en = $this->country->name_en;
        $this->name_id = $this->country->name_id;
        $this->selected_id = $this->country->id;
    }



    public function update()
    {
        permation('country.edit');
        $this->validate([
            'name_ar' => 'required|min:1|string',
            'name_en' => 'required|min:1|string',
            'name_id' => 'required|min:1|string',
        ], messages());
        $country = Country::findOrFail($this->selected_id);
        $country->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.countries');
    }

    public function render()
    {
        return view('livewire.admin.country.edit')->layout(ADMIN_LAYOUT);
    }
}
