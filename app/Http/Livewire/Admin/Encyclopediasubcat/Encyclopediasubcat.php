<?php

namespace App\Http\Livewire\Admin\Encyclopediasubcat;

use Livewire\Component;
use App\Models\EncyclopediaSubCat as EncyclopediaSubCatModel;
class Encyclopediasubcat extends Component
{

    public $encyclopediaSubCat;
    public function mount(EncyclopediaSubCatModel $encyclopediasubcat)
    {
         permation('encyclopedia.subcat.view');
        $this->encyclopediaSubCat = $encyclopediasubcat;
    }

    public function render()
    {
        return view('livewire.admin.encyclopediasubcat.encyclopediasubcat')->layout(ADMIN_LAYOUT);
    }


}
