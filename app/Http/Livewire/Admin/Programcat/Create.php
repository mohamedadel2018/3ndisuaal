<?php

namespace App\Http\Livewire\Admin\Programcat;

use Livewire\Component;
use App\Models\ProgramCat;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{


    public $name_ar, $name_en, $name_id;

    public function mount()
    {
         permation('program.cat.create');
    }

    public function store()
    {

         permation('program.cat.create');
        $this->validate([
            'name_ar' => 'required|min:1|string|unique:program_cats',
            'name_en' => 'required|min:1|string|unique:program_cats',
            'name_id' => 'required|min:1|string|unique:program_cats',
        ], messages());
        ProgramCat::create([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_saved'));
        $this->reset();
        $this->resetValidation();
        // REDIRECT TO
        return redirect()->route('admin.programcats');
    }

    public function render()
    {
        return view('livewire.admin.programcat.create')->layout(ADMIN_LAYOUT);
    }


}
