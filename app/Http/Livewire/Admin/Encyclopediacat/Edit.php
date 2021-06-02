<?php

namespace App\Http\Livewire\Admin\Encyclopediacat;

use Livewire\Component;
use App\Models\EncyclopediaCat;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{

    public $name_ar, $name_en, $name_id, $selected_id, $encyclopediacat;

    public function mount(EncyclopediaCat $encyclopediacat)
    {
         permation('encyclopedia.cat.edit');
        $this->encyclopediacat = $encyclopediacat;
        $this->name_ar = $this->encyclopediacat->name_ar;
        $this->name_en = $this->encyclopediacat->name_en;
        $this->name_id = $this->encyclopediacat->name_id;
        $this->selected_id = $this->encyclopediacat->id;
    }



    public function update()
    {
         permation('encyclopedia.cat.edit');
        $this->validate([
            'name_ar' => 'required|min:1|string',
            'name_en' => 'required|min:1|string',
            'name_id' => 'required|min:1|string',
        ], messages());
        $encyclopediaCat = EncyclopediaCat::findOrFail($this->selected_id);
        $encyclopediaCat->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.encyclopediacats');
    }

    public function render()
    {
        return view('livewire.admin.encyclopediacat.edit')->layout(ADMIN_LAYOUT);
    }



}
