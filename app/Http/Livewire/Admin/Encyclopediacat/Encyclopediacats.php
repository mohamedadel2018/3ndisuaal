<?php

namespace App\Http\Livewire\Admin\Encyclopediacat;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EncyclopediaCat;
use Illuminate\Support\Facades\Auth;

class Encyclopediacats extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $name_ar, $name_en, $name_id, $selected_id, $term;
    public function mount()
    {
         permation('encyclopedia.cat.view');
    }

    public function delete($id)
    {
         permation('encyclopedia.cat.delete');
        $encyclopediaCat = EncyclopediaCat::findOrFail($id);
        if ($encyclopediaCat->encyclopediaSubCats()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_sub_categories_first'));
        }
        if ($encyclopediaCat->encyclopedias()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_encyclopedias_first'));
        }
        $encyclopediaCat->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $encyclopediaCats = EncyclopediaCat::select(['id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.encyclopediacat.encyclopediacats', [
            'encyclopediaCats' => $encyclopediaCats,
        ])->layout(ADMIN_LAYOUT);
    }


}
