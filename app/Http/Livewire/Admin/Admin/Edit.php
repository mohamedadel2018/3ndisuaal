<?php

namespace App\Http\Livewire\Admin\Admin;

use App\Models\Role;
use App\Models\Admin;
use Livewire\Component;

class Edit extends Component
{


    public $admin;
    public $name;
    public $email;
    public $username;
    public $password;
    public $roles;
    public $role_id;
    public $selected_id;

    public function mount(Admin $admin)
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $this->admin = $admin;
        $this->selected_id = $this->admin->id;
        $this->name = $this->admin->name;
        $this->email = $this->admin->email;
        $this->username = $this->admin->username;
        $this->role_id = $this->admin->roles[0]->id;
        $this->roles = Role::all();
    }

    public function update()
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $this->validate([
            'name' => 'required|min:1|string',
            'email' => 'required|min:1|string|email',
            'username' => 'required|min:1|string',
            'password' => 'nullable|min:1|string',
            'role_id' => 'required|exists:roles,id',
        ], messages());
        $admin = Admin::findOrFail($this->selected_id);
        if ($this->password != '') {
            $admin->update([
                'name' => $this->name,
                'email' => $this->email,
                'username' => $this->username,
                'password' => $this->password,
            ]);
        } else {
            $admin->update([
                'name' => $this->name,
                'email' => $this->email,
                'username' => $this->username,
            ]);
        }
        $admin->roles()->detach($this->role_id);
        $admin->roles()->attach($this->role_id);
        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.admin.index');
    }

    public function render()
    {
        return view('livewire.admin.admin.edit')->layout(ADMIN_LAYOUT);
    }
}
