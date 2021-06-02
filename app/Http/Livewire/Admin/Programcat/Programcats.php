<?php

namespace App\Http\Livewire\Admin\Programcat;

use Livewire\Component;
use App\Models\ProgramCat;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Programcats extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'resetEditModal',
        'delete'
    ];
    public $name_ar, $name_en, $name_id,$selected_id,$term;
    public $updateMode = false;

    public function mount()
    {
         permation('program.cat.view');
    }
    public function delete($id)
    {
         permation('program.cat.delete');
        $programCat = ProgramCat::findOrFail($id);
        if ($programCat->programSubCats()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_sub_categories_first'));
        }
        if ($programCat->playlists()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_programs_first'));
        }
        $programCat->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $programCats = ProgramCat::select(['id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.programcat.programcats',[
            'programCats' => $programCats,
        ])->layout(ADMIN_LAYOUT);
    }
}
