<?php

namespace App\Http\Livewire\Admin\Readcat;

use App\Models\ReadCat;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{

    public $name_ar, $name_en, $name_id, $selected_id, $readcat;

    public function mount(ReadCat $readcat)
    {
         permation('read.cat.edit');
        $this->readcat = $readcat;
        $this->name_ar = $this->readcat->name_ar;
        $this->name_en = $this->readcat->name_en;
        $this->name_id = $this->readcat->name_id;
        $this->selected_id = $this->readcat->id;
    }



    public function update()
    {
         permation('read.cat.create');
        $this->validate([
            'name_ar' => 'required|min:1|string',
            'name_en' => 'required|min:1|string',
            'name_id' => 'required|min:1|string',
        ], messages());
        $readcat = ReadCat::findOrFail($this->selected_id);
        $readcat->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.readcats');
    }

    public function render()
    {
        return view('livewire.admin.readcat.edit')->layout(ADMIN_LAYOUT);
    }
}
