<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;

    public function mount()
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
    }


    public function delete($id)
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $role = Role::findOrFail($id);

        $role->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $roles = Role::where('id','>',1)->where('name', 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.role.index', [
            'roles' => $roles,
        ])->layout(ADMIN_LAYOUT);
    }

}
