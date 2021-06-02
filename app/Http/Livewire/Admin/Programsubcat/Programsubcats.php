<?php

namespace App\Http\Livewire\Admin\Programsubcat;

use Livewire\Component;
use App\Models\ProgramCat;
use Livewire\WithPagination;
use App\Models\ProgramSubCat;
use Illuminate\Support\Facades\Auth;

class Programsubcats extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public  $term;

    public function mount()
    {
         permation('program.subcat.view');
    }

    public function delete($id)
    {
         permation('program.subcat.delete');
        $programSubCat = ProgramSubCat::findOrFail($id);
        if ($programSubCat->playlists()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_programs_first'));
        }
        $programSubCat->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $programSubCats = ProgramSubCat::with('programCat')->select(['program_cat_id', 'id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        $programCats = ProgramCat::all();
        return view('livewire.admin.programsubcat.programsubcats', [
            'programSubCats' => $programSubCats,
            'programCats' => $programCats,
        ])->layout(ADMIN_LAYOUT);
    }
}
