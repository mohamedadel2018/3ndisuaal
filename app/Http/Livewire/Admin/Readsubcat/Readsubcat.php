<?php

namespace App\Http\Livewire\Admin\Readsubcat;

use Livewire\Component;
use App\Models\ReadSubCat as ReadSubCatModel;
class Readsubcat extends Component
{

    public $readSubCat;
    public function mount(ReadSubCatModel $readsubcat)
    {
         permation('read.subcat.view');
        $this->readSubCat = $readsubcat;
    }

    public function render()
    {
        return view('livewire.admin.readsubcat.readsubcat')->layout(ADMIN_LAYOUT);
    }


}
