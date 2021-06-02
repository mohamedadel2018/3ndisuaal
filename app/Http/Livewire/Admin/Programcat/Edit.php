<?php

namespace App\Http\Livewire\Admin\Programcat;

use Livewire\Component;
use App\Models\ProgramCat;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{

    public $name_ar, $name_en, $name_id, $selected_id, $programcat;

    public function mount(ProgramCat $programcat)
    {
         permation('program.cat.edit');
        $this->programcat = $programcat;
        $this->name_ar = $this->programcat->name_ar;
        $this->name_en = $this->programcat->name_en;
        $this->name_id = $this->programcat->name_id;
        $this->selected_id = $this->programcat->id;
    }



    public function update()
    {
         permation('program.cat.edit');
        $this->validate([
            'name_ar' => 'required|min:1|string',
            'name_en' => 'required|min:1|string',
            'name_id' => 'required|min:1|string',
        ], messages());
        $programcat = ProgramCat::findOrFail($this->selected_id);
        $programcat->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.programcats');
    }

    public function render()
    {
        return view('livewire.admin.programcat.edit')->layout(ADMIN_LAYOUT);
    }

}
