<?php

namespace App\Http\Livewire\Admin\Role;

use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        if (!admin()->isSuperAdmin()) {
            abort('403', __('app.not.authorized'));
        }
        return view('livewire.admin.role.show');
    }
}
