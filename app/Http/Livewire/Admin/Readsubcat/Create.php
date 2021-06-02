<?php

namespace App\Http\Livewire\Admin\Readsubcat;

use App\Models\ReadCat;
use Livewire\Component;
use App\Models\ReadSubCat;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{



    public $readCats;
    public $read_cat_id;
    public $name_ar;
    public $name_en;
    public $name_id;

    public function mount()
    {
         permation('read.subcat.create');
        $this->readCats = ReadCat::all();
    }



    public function store()
    {
         permation('read.subcat.create');
        $this->validate([
            'read_cat_id' => 'required|integer|exists:read_cats,id',
            'name_ar' => 'required|min:1|max:200|string|unique:read_sub_cats',
            'name_en' => 'required|min:1|max:200|string|unique:read_sub_cats',
            'name_id' => 'required|min:1|max:200|string|unique:read_sub_cats',
        ], messages());
        ReadSubCat::create([
            'read_cat_id' => $this->read_cat_id,
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);

        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.readsubcats');
    }


    public function render()
    {
        return view('livewire.admin.readsubcat.create')->layout(ADMIN_LAYOUT);
    }

}
