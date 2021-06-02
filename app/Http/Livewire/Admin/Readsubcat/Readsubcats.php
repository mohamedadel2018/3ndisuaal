<?php

namespace App\Http\Livewire\Admin\Readsubcat;

use App\Models\ReadCat;
use Livewire\Component;
use App\Models\ReadSubCat;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Readsubcats extends Component
{


    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $read_cat_id, $name_ar, $name_en, $name_id, $selected_id, $term;
    public $updateMode = false;

    public function mount()
    {
         permation('read.subcat.view');
    }

    public function delete($id)
    {
         permation('read.subcat.delete');
        $readSubCat = ReadSubCat::findOrFail($id);
        if ($readSubCat->reads()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_reads_first'));
        }
        $readSubCat->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $readSubCats = ReadSubCat::with('readCat')->select(['read_cat_id', 'id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        $readCats = ReadCat::all();
        return view('livewire.admin.readsubcat.readsubcats', [
            'readSubCats' => $readSubCats,
            'readCats' => $readCats,
        ])->layout(ADMIN_LAYOUT);
    }

}
