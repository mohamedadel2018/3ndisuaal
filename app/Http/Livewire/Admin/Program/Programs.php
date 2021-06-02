<?php

namespace App\Http\Livewire\Admin\Program;

use Livewire\Component;
use App\Models\Playlist;
use App\Models\Instractor;
use App\Models\ProgramCat;
use Livewire\WithPagination;
use App\Models\ProgramSubCat;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\Program as ProgramModel;

class Programs extends Component
{
    use WithPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;

    public function mount()
    {
         permation('program.view');
    }

    public function delete($id)
    {
         permation('program.delete');
        $program = ProgramModel::findOrFail($id);
        if ($program->reads()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_reads_first'));
        }
        $program->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $programCats = ProgramCat::all();
        $instractors = Instractor::all();
        $playlists = Playlist::all();
        $programs = ProgramModel::with( 'playlist')->where('title_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.program.programs', [
            'programs' => $programs,
            'programCats' => $programCats,
            'instractors' => $instractors,
            'playlists' => $playlists,
        ])->layout(ADMIN_LAYOUT);
    }
}
