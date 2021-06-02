<?php

namespace App\Http\Livewire\Admin\Level;

use App\Models\Level;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Levels extends Component
{





    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;

    public function mount()
    {
        permation('level.view');
    }

    public function delete($id)
    {
        permation('level.delete');
        $level = Level::findOrFail($id);
        if ($level->reads()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_reads_first'));
        }
        $level->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $levels = Level::select(['id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.level.levels', [
            'levels' => $levels,
        ])->layout(ADMIN_LAYOUT);
    }
}
