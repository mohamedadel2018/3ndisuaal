<?php

namespace App\Http\Livewire\Admin\Encyclopedia;

use Livewire\Component;
use App\Models\Encyclopedia as EncyclopediaModel;

class Encyclopedia extends Component
{


    public $encyclopedia;
    public function mount(encyclopediaModel $encyclopedia)
    {
         permation('encyclopedia.view');
        $this->encyclopedia = $encyclopedia;
    }
    public function render()
    {
        return view('livewire.admin.encyclopedia.encyclopedia')->layout(ADMIN_LAYOUT);
    }



}
