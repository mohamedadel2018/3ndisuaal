<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;
use App\Models\Encyclopedia as EncyclopediaModel;

class Encyclopedias extends Component
{
    use WithPagination;
    public $encyclopediaCatId;
    public $encyclopediaCat;
    public $encyclopediasSubCats;
    public $encyclopediaCats;
    public $search = '';


    public function mount($encyclopediaCatId)
    {
        $this->encyclopediaCatId = $encyclopediaCatId;
        $this->encyclopediaCat =   EncyclopediaCat::find($this->encyclopediaCatId);
        $this->encyclopediasSubCats = EncyclopediaSubCat::where('encyclopedia_cat_id',$this->encyclopediaCatId)->get();
        $this->encyclopediaCats = EncyclopediaCat::inRandomOrder()->take(10)->get();
    }
    public function render()
    {
        $encyclopedias = EncyclopediaModel::where('encyclopedia_cat_id', $this->encyclopediaCatId)->where('question_' . app()->getLocale(), 'LIKE', '%' . trim($this->search) . '%')->latest()->paginate(PGA);

        return view('livewire.frontend.encyclopedias',[
            'encyclopedias' => $encyclopedias,
        ]);
    }
}
