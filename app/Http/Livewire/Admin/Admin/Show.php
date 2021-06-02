<?php

namespace App\Http\Livewire\Admin\Admin;

use App\Models\Admin;
use Livewire\Component;

class Show extends Component
{

    public $admin;

    public function mount(Admin $admin)
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        $this->admin = $admin;
    }
    public function render()
    {
        return view('livewire.admin.admin.show')->layout(ADMIN_LAYOUT);
    }

}
