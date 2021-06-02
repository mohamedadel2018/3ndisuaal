<?php

namespace App\Http\Livewire\Admin\Readcat;

use Livewire\Component;
use App\Models\ReadCat as ReadCatModel;

class Readcat extends Component
{

    public $readCat, $readSubCats;
    public function mount(ReadCatModel $readcat)
    {
        permation('read.cat.view');
        $this->readCat = $readcat;
        $this->readSubCats = $readcat->readSubCats;
    }
    public function render()
    {
        return view('livewire.admin.readcat.readcat')->layout(ADMIN_LAYOUT);
    }
}
