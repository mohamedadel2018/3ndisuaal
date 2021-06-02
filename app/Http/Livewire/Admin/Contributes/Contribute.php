<?php

namespace App\Http\Livewire\Admin\Contributes;

use Livewire\Component;
use App\Models\Contribute as ContributeModel;

class Contribute extends Component
{
    public $contribute;
    public function mount(ContributeModel $contribute)
    {
         permation('contribute.view');
        $this->contribute = $contribute;
    }
    public function render()
    {
        return view('livewire.admin.contributes.contribute')->layout(ADMIN_LAYOUT);
    }


}
