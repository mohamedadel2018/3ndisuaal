<?php

namespace App\Http\Livewire\Admin\Encyclopediasubcat;

use Livewire\Component;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{

    public $encyclopediasubcat;
    public $encyclopediaCats;
    public $encyclopedia_cat_id;
    public $name_ar;
    public $name_en;
    public $name_id;
    public $selected_id;

    public function mount(EncyclopediaSubCat $encyclopediasubcat)
    {
         permation('encyclopedia.subcat.edit');
        $this->encyclopediasubcat = $encyclopediasubcat;
        $this->selected_id = $encyclopediasubcat->id;
        $this->encyclopedia_cat_id = $encyclopediasubcat->encyclopedia_cat_id;
        $this->encyclopediaCats = EncyclopediaCat::all();
        $this->name_ar = $this->encyclopediasubcat->name_ar;
        $this->name_en = $this->encyclopediasubcat->name_en;
        $this->name_id = $this->encyclopediasubcat->name_id;
    }

    public function update()
    {
         permation('encyclopedia.subcat.edit');
        $this->validate([
            'encyclopedia_cat_id' => 'required|integer|exists:encyclopedia_cats,id',
            'name_ar' => 'required|min:1|max:200|string',
            'name_en' => 'required|min:1|max:200|string',
            'name_id' => 'required|min:1|max:200|string',
        ], messages());
        $encyclopediaSubCat = EncyclopediaSubCat::findOrFail($this->selected_id);
        $encyclopediaSubCat->update(
            [
                'encyclopedia_cat_id' => $this->encyclopedia_cat_id,
                'name_ar' => $this->name_ar,
                'name_en' => $this->name_en,
                'name_id' => $this->name_id,
                'admin_id' => Auth::user()->id,
            ]
        );

        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.encyclopediasubcats');
    }

    public function render()
    {
        return view('livewire.admin.encyclopediasubcat.edit')->layout(ADMIN_LAYOUT);
    }

}
