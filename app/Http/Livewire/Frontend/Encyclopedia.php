<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;
use App\Models\Encyclopedia as EncyclopediaModel;

class Encyclopedia extends Component
{

    use WithPagination;
    public $encyclopedia;
    public $encyclopediaCat;
    public $encyclopediasSubCats;
    public $encyclopediaCats;


    public function mount(EncyclopediaModel $encyclopedia,$slug)
    {
        $this->encyclopedia = $encyclopedia;
        $this->encyclopediaCat =   EncyclopediaCat::find($this->encyclopedia->encyclopedia_cat_id);
        $this->encyclopediasSubCats = EncyclopediaSubCat::where('encyclopedia_cat_id', $this->encyclopedia->encyclopedia_cat_id)->get();
        $this->encyclopediaCats = EncyclopediaCat::inRandomOrder()->take(10)->get();
    }
    public function render()
    {
        $this->encyclopedia->increment('views');
        $this->encyclopedia->save();
        return view('livewire.frontend.encyclopedia');
    }

}
