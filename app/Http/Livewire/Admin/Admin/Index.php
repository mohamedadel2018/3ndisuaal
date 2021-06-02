<?php

namespace App\Http\Livewire\Admin\Admin;

use App\Models\Admin;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;

class Index extends Component
{

    public function mount()
    {
        if (!admin()->isSuperAdmin()) {
           abort('403',__('app.not.authorized'));
        }
    }

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;




    public function delete($id)
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $admin = Admin::findOrFail($id);

        $admin->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $admins = Admin::where('name', 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.admin.index', [
            'admins' => $admins,
        ])->layout(ADMIN_LAYOUT);
    }

}
