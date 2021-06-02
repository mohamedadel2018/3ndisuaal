<?php

namespace App\Http\Livewire\Admin\Country;

use App\Models\Country;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{

    public $name_ar, $name_en, $name_id;

    public function mount()
    {
         permation('country.create');
    }

    public function store()
    {
        permation('country.create');
        $this->validate([
            'name_ar' => 'required|min:1|string|unique:countries',
            'name_en' => 'required|min:1|string|unique:countries',
            'name_id' => 'required|min:1|string|unique:countries',
        ], messages());
        Country::create([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_saved'));
        $this->reset();
        $this->resetValidation();
        // REDIRECT TO
        return redirect()->route('admin.countries');
    }

    public function render()
    {
        return view('livewire.admin.country.create')->layout(ADMIN_LAYOUT);
    }

}
