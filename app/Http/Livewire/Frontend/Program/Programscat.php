<?php

namespace App\Http\Livewire\Frontend\Program;

use Livewire\Component;
use App\Models\ProgramCat;

class Programscat extends Component
{

    public $programCats;

    public function mount()
    {
        $this->programCats = ProgramCat::latest()->get();
    }
    public function render()
    {
        return view('livewire.frontend.program.programscat');
    }

}
