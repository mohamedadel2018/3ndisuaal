<?php

namespace App\Http\Livewire\Admin\Instractor;

use Livewire\Component;
use App\Models\Instractor;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Instractors extends Component
{
    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];

    public $term;

    public function mount()
    {
        permation('instractor.view');
    }

    public function delete($id)
    {
         permation('instractor.delete');
        $instractor = Instractor::findOrFail($id);

        if ($instractor->programs()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_programs_first'));
        }
        deleteFile($instractor, 'default');
        deleteFile($instractor, 'file');
        $instractor->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $instractors = Instractor::with('images')->select(['id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.instractor.instractors', [
            'instractors' => $instractors,
        ])->layout(ADMIN_LAYOUT);
    }
}
