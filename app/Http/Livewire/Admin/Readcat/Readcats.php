<?php

namespace App\Http\Livewire\Admin\Readcat;

use App\Models\ReadCat;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Readcats extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $name_ar, $name_en, $name_id, $selected_id, $term;

    public function mount()
    {
        permation('read.cat.view');
    }

    public function delete($id)
    {
        permation('read.cat.delete');
        $readCat = ReadCat::findOrFail($id);
        if ($readCat->readSubCats()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_sub_categories_first'));
        }
        if ($readCat->reads()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_reads_first'));
        }
        $readCat->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $readCats = ReadCat::select(['id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.readcat.readcats', [
            'readCats' => $readCats,
        ])->layout(ADMIN_LAYOUT);
    }
}
