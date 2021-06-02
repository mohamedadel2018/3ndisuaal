<?php

namespace App\Http\Livewire\Admin\Admin;

use App\Models\Role;
use App\Models\Admin;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $email;
    public $username;
    public $password;
    public $roles;
    public $role_id;

    public function mount()
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $this->roles = Role::all();
    }

    public function store()
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $this->validate([
            'name' => 'required|min:1|string',
            'email' => 'required|min:1|string|email|unique:admins,email',
            'username' => 'required|min:1|string|unique:admins,username',
            'password' => 'required|min:1|string',
            'role_id' => 'required|min:1|string|exists:roles,id',
        ], messages());
        $admin = Admin::create([
            'name' => $this->name,
            'email' => $this->email,
            'username' => $this->username,
            'password' => $this->password,
        ]);
        $admin->roles()->attach($this->role_id);
        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.admin.index');
    }
    public function render()
    {
        return view('livewire.admin.admin.create')->layout(ADMIN_LAYOUT);
    }

}
