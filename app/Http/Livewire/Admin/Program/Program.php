<?php

namespace App\Http\Livewire\Admin\Program;

use App\Models\Program as ProgramModel;
use Livewire\Component;

class Program extends Component
{

    public $program;
    public function mount(ProgramModel $program)
    {
         permation('program.view');
        $this->program = $program;
    }
    public function render()
    {
        return view('livewire.admin.program.program')->layout(ADMIN_LAYOUT);
    }



}
