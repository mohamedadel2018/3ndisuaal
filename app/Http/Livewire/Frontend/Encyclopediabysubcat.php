<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Encyclopedia;
use Livewire\WithPagination;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;

class Encyclopediabysubcat extends Component
{

    use WithPagination;
    public $encyclopediaSubCatId;
    public $encyclopediaSubCat;
    public $encyclopediasSubCats;
    public $encyclopediaCats;
    public $search = '';


    public function mount($encyclopediaSubCatId)
    {
        $this->encyclopediaSubCatId = $encyclopediaSubCatId;
        $this->encyclopediaSubCat =   EncyclopediaSubCat::find($this->encyclopediaSubCatId);
        $this->encyclopediasSubCats = EncyclopediaSubCat::with('encyclopediaCat')->where('encyclopedia_cat_id', $this->encyclopediaSubCat->encyclopediaCat->id)->get();
        $this->encyclopediaCats = EncyclopediaCat::inRandomOrder()->take(10)->get();
    }
    public function render()
    {
        $encyclopedias = Encyclopedia::where('encyclopedia_sub_cat_id', $this->encyclopediaSubCatId)->where('question_' . app()->getLocale(), 'LIKE', '%' . trim($this->search) . '%')->latest()->paginate(PGA);

        return view('livewire.frontend.encyclopediabysubcat', [
            'encyclopedias' => $encyclopedias,
        ]);
    }

}
