<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\EncyclopediaCat as EncyclopediaCatModel;

class Encyclopediacat extends Component
{
    public $encyclopediaCats;

    public function mount()
    {
        $this->encyclopediaCats = EncyclopediaCatModel::latest()->get();
    }
    public function render()
    {
        return view('livewire.frontend.encyclopediacat');
    }
}
