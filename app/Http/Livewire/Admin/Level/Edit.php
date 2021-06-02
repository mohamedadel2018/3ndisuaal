<?php

namespace App\Http\Livewire\Admin\Level;

use App\Models\Level;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{



    public $name_ar, $name_en, $name_id, $selected_id, $level;

    public function mount(Level $level)
    {
        permation('level.edit');
        $this->level = $level;
        $this->name_ar = $this->level->name_ar;
        $this->name_en = $this->level->name_en;
        $this->name_id = $this->level->name_id;
        $this->selected_id = $this->level->id;
    }



    public function update()
    {
        permation('level.edit');
        $this->validate([
            'name_ar' => 'required|min:1|string',
            'name_en' => 'required|min:1|string',
            'name_id' => 'required|min:1|string',
        ], messages());
        $level = Level::findOrFail($this->selected_id);
        $level->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.levels');
    }

    public function render()
    {
        return view('livewire.admin.level.edit')->layout(ADMIN_LAYOUT);
    }
}
