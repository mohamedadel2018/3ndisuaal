<?php

namespace App\Http\Livewire\Admin\Read;

use Livewire\Component;
use App\Models\Read as ReadModel;
class Read extends Component
{
    public $read;
    public function mount(ReadModel $read)
    {
         permation('read.view');
        $this->read = $read;
    }
    public function render()
    {
        return view('livewire.admin.read.read')->layout(ADMIN_LAYOUT);
    }

}
