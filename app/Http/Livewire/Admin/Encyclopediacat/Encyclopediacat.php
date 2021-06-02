<?php

namespace App\Http\Livewire\Admin\Encyclopediacat;

use Livewire\Component;
use App\Models\EncyclopediaCat as EncyclopediaModel;

class Encyclopediacat extends Component
{

    public $encyclopediaCat, $encyclopediaSubCats;
    public function mount(EncyclopediaModel $encyclopediacat)
    {
         permation('encyclopedia.cat.view');
        $this->encyclopediaCat = $encyclopediacat;
        $this->encyclopediaSubCats = $encyclopediacat->encyclopediaSubCats;
    }
    public function render()
    {
        return view('livewire.admin.encyclopediacat.encyclopediacat')->layout(ADMIN_LAYOUT);
    }


}
