<?php

namespace App\Http\Livewire\Admin\Level;

use App\Models\Level as LevelModel;
use Livewire\Component;

class Level extends Component
{


    public $level;
    public function mount(LevelModel $level)
    {
        permation('level.view');
        $this->level = $level;
    }
    public function render()
    {
        return view('livewire.admin.level.level')->layout(ADMIN_LAYOUT);
    }
}
