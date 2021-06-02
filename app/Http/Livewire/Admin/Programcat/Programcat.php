<?php

namespace App\Http\Livewire\Admin\Programcat;

use Livewire\Component;
use App\Models\ProgramCat as ProgramCatModel;

class Programcat extends Component
{
    public $programCat, $programSubCats;
    public function mount(ProgramCatModel $programcat)
    {
        permation('program.cat.view');
        $this->programCat = $programcat;
        $this->programSubCats = $programcat->programSubCats;
    }
    public function render()
    {
        return view('livewire.admin.programcat.programcat')->layout(ADMIN_LAYOUT);
    }
}
