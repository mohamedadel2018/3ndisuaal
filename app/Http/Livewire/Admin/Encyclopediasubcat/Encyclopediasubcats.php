<?php

namespace App\Http\Livewire\Admin\Encyclopediasubcat;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;
use Illuminate\Support\Facades\Auth;

class Encyclopediasubcats extends Component
{


    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $encyclopedia_cat_id, $name_ar, $name_en, $name_id, $selected_id, $term;
    public $updateMode = false;
    // protected $rules = ;
    public function mount()
    {
         permation('encyclopedia.subcat.view');
    }
    public function delete($id)
    {
         permation('encyclopedia.subcat.delete');
        $encyclopediaSubCat = EncyclopediaSubCat::findOrFail($id);
        if ($encyclopediaSubCat->encyclopedias()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_encyclopedias_first'));
        }
        $encyclopediaSubCat->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $encyclopediaSubCats = EncyclopediaSubCat::with('encyclopediaCat')->select(['encyclopedia_cat_id', 'id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        $encyclopediaCats = EncyclopediaCat::all();
        return view('livewire.admin.encyclopediasubcat.encyclopediasubcats', [
            'encyclopediaSubCats' => $encyclopediaSubCats,
            'encyclopediaCats' => $encyclopediaCats,
        ])->layout(ADMIN_LAYOUT);
    }


}
