<?php

namespace App\Http\Livewire\Admin\Encyclopediasubcat;

use Livewire\Component;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{

    public $encyclopediaCats;
    public $encyclopedia_cat_id;
    public $name_ar;
    public $name_en;
    public $name_id;

    public function mount()
    {
        permation('encyclopedia.subcat.create');
        $this->encyclopediaCats = EncyclopediaCat::all();
    }



    public function store()
    {
        permation('encyclopedia.subcat.create');
        $this->validate([
            'encyclopedia_cat_id' => 'required|integer|exists:encyclopedia_cats,id',
            'name_ar' => 'required|min:1|max:200|string|unique:encyclopedia_sub_cats',
            'name_en' => 'required|min:1|max:200|string|unique:encyclopedia_sub_cats',
            'name_id' => 'required|min:1|max:200|string|unique:encyclopedia_sub_cats',
        ], messages());
        EncyclopediaSubCat::create([
            'encyclopedia_cat_id' => $this->encyclopedia_cat_id,
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);

        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.encyclopediasubcats');
    }


    public function render()
    {
        return view('livewire.admin.encyclopediasubcat.create')->layout(ADMIN_LAYOUT);
    }
}
