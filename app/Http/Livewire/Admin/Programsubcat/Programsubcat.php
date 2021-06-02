<?php

namespace App\Http\Livewire\Admin\Programsubcat;

use Livewire\Component;
use App\Models\ProgramSubCat as ProgramSubCatModel;

class Programsubcat extends Component
{
    public $programSubCat;
    public function mount(ProgramSubCatModel $programsubcat)
    {
         permation('program.subcat.view');
        $this->programSubCat = $programsubcat;
    }

    public function render()
    {
        return view('livewire.admin.programsubcat.programsubcat')->layout(ADMIN_LAYOUT);
    }
}
