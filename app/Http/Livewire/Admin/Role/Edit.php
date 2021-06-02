<?php

namespace App\Http\Livewire\Admin\Role;

use App\Models\Role;
use Livewire\Component;
use App\Models\PermationFor;

class Edit extends Component
{

    public $role;
    public $label_en;
    public $label_ar;
    public $permations = [];
    public $permationFors;
    public $role_id;
    public $selected_id;
    public $permationFromUpdating = [];

    public function mount(Role $role)
    {
        // dd($role->permations);
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $this->role = $role;
        $this->selected_id = $this->role->id;
        $this->permations = $this->role->permations->pluck('id')->toArray();
        $this->permationFromUpdating = $this->role->permations->pluck('id')->toArray();
        // dd($this->permations);
        $this->label_ar = $this->role->label_ar;
        $this->label_en = $this->role->label_en;
        $this->permationFors = PermationFor::with('permations')->get();
    }
    public function updatePermationArray($permationId)
    {
        if (in_array($permationId, $this->permationFromUpdating)) {
            if (($key = array_search((int)$permationId, $this->permationFromUpdating)) !== false) {
                unset($this->permationFromUpdating[$key]);
            }
        } else {
            array_push($this->permationFromUpdating, (int)$permationId);
        }
    }


    public function update()
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $this->validate([
            'label_ar' => 'required|string',
            'label_en' => 'required|string',
            'permationFromUpdating' => 'required|array',
            'permationFromUpdating.*' => 'required',
        ], messages());
        $role = Role::findOrFail($this->selected_id);
        $role->update([
            'label_en' => $this->label_en,
            'label_ar' => $this->label_ar,
            'name' => $this->label_en,
        ]);
        // dd(array_filter($this->permations));
        $role->permations()->sync($this->permationFromUpdating);
        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        // return redirect()->route('admin.role.index');
    }

    public function render()
    {
        return view('livewire.admin.role.edit')->layout(ADMIN_LAYOUT);
    }
}
