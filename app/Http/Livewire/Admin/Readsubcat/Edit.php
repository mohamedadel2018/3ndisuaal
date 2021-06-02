<?php

namespace App\Http\Livewire\Admin\Readsubcat;

use App\Models\ReadCat;
use Livewire\Component;
use App\Models\ReadSubCat;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{

    public $readsubcat;
    public $readCats;
    public $read_cat_id;
    public $name_ar;
    public $name_en;
    public $name_id;
    public $selected_id;

    public function mount(ReadSubCat $readsubcat)
    {
        permation('read.subcat.edit');
        $this->readsubcat = $readsubcat;
        $this->selected_id = $readsubcat->id;
        $this->read_cat_id = $readsubcat->read_cat_id;
        $this->readCats = ReadCat::all();
        $this->name_ar = $this->readsubcat->name_ar;
        $this->name_en = $this->readsubcat->name_en;
        $this->name_id = $this->readsubcat->name_id;
    }

    public function update()
    {
        permation('read.subcat.edit');
        $this->validate([
            'read_cat_id' => 'required|integer|exists:read_cats,id',
            'name_ar' => 'required|min:1|max:200|string',
            'name_en' => 'required|min:1|max:200|string',
            'name_id' => 'required|min:1|max:200|string',
        ], messages());
        $readSubCat = ReadSubCat::findOrFail($this->selected_id);
        $readSubCat->update(
            [
                'read_cat_id' => $this->read_cat_id,
                'name_ar' => $this->name_ar,
                'name_en' => $this->name_en,
                'name_id' => $this->name_id,
                'admin_id' => Auth::user()->id,
            ]
        );

        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.readsubcats');
    }

    public function render()
    {
        return view('livewire.admin.readsubcat.edit')->layout(ADMIN_LAYOUT);
    }
}
