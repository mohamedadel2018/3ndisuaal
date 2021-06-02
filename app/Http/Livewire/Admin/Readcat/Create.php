<?php

namespace App\Http\Livewire\Admin\Readcat;

use App\Models\ReadCat;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    public $name_ar, $name_en, $name_id;
    public function mount()
    {
         permation('read.cat.create');
    }

    public function store()
    {
         permation('read.cat.create');
        $this->validate([
            'name_ar' => 'required|min:1|string|unique:read_cats',
            'name_en' => 'required|min:1|string|unique:read_cats',
            'name_id' => 'required|min:1|string|unique:read_cats',
        ], messages());
        ReadCat::create([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_saved'));
        $this->reset();
        $this->resetValidation();
        // REDIRECT TO
        return redirect()->route('admin.readcats');
    }

    public function render()
    {
        return view('livewire.admin.readcat.create')->layout(ADMIN_LAYOUT);
    }
}
