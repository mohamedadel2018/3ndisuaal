<?php

namespace App\Http\Livewire\Admin\About;

use App\Models\About;
use Livewire\Component;

class Show extends Component
{

    public $about;

    public function mount(About $about)
    {
         permation('about.view');
        $this->about = $about;
    }
    public function render()
    {
        return view('livewire.admin.about.show')->layout(ADMIN_LAYOUT);
    }

}
