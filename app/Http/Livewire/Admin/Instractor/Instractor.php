<?php

namespace App\Http\Livewire\Admin\Instractor;

use Livewire\Component;
use App\Models\Instractor as InstractorModel;

class Instractor extends Component
{

    public $instractor;
    public function mount(InstractorModel $instractor)
    {
        permation('instractor.view');
        $this->instractor = $instractor;
    }
    public function render()
    {
        return view('livewire.admin.instractor.instractor')->layout(ADMIN_LAYOUT);
    }


}
