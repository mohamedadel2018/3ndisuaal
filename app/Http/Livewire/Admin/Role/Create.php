<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;
use App\Models\PermationFor;

class Create extends Component
{
    public $label_ar;
    public $label_en;
    public $permations = [];
    public $permationFors;

    public function mount()
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $this->permationFors = PermationFor::with('permations')->get();
    }

    public function store()
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $this->validate([
            'label_ar' => 'required|string|unique:roles,label_ar',
            'label_en' => 'required|string|unique:roles,label_en',
            'permations' => 'required|array',
            'permations.*' => 'required',
        ], messages());
        $role = Role::create([
            'name' => $this->label_en,
            'label_ar' => $this->label_ar,
            'label_en' => $this->label_en,
        ]);
        $role->permations()->sync($this->permations);
        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.role.index');
    }

    public function render()
    {
        return view('livewire.admin.role.create')->layout(ADMIN_LAYOUT);
    }
}
