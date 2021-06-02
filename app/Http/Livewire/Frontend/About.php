<?php

namespace App\Http\Livewire\Frontend;

use App\Models\About as AboutModel;
use Livewire\Component;

class About extends Component
{
    public $about;

    public function mount()
    {
        $this->about = AboutModel::latest()->first();
    }
    public function render()
    {
        return view('livewire.frontend.about');
    }
}
