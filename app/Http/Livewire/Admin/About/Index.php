<?php

namespace App\Http\Livewire\Admin\About;

use App\Models\About;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];

    public function mount()
    {
         permation('about.view');
    }

    public function delete($id)
    {
         permation('about.delete');
        $about = About::findOrFail($id);

        $about->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $abouts = About::latest()->paginate(PGA);
        return view('livewire.admin.about.index', [
            'abouts' => $abouts,
        ])->layout(ADMIN_LAYOUT);
    }
}
