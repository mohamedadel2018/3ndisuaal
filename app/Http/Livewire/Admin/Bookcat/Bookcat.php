<?php

namespace App\Http\Livewire\Admin\Bookcat;

use Livewire\Component;
use App\Models\BookCat as BookCatModel;

class Bookcat extends Component
{

    public $bookCat, $bookSubCats;
    public function mount(BookCatModel $bookcat)
    {
         permation('book.cat.view');
        $this->bookCat = $bookcat;
        $this->bookSubCats = $bookcat->bookSubCats;
    }
    public function render()
    {
        return view('livewire.admin.bookcat.bookcat')->layout(ADMIN_LAYOUT);
    }

}
