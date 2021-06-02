<?php

namespace App\Http\Livewire\Admin\Booksubcat;

use Livewire\Component;
use App\Models\BookSubCat as BookSubCatModel;

class Booksubcat extends Component
{

    public $bookSubCat;
    public function mount(BookSubCatModel $booksubcat)
    {
        permation('book.subcat.view');
        $this->bookSubCat = $booksubcat;
    }

    public function render()
    {
        return view('livewire.admin.booksubcat.booksubcat')->layout(ADMIN_LAYOUT);
    }
}
