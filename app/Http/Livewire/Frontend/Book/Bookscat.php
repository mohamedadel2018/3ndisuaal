<?php

namespace App\Http\Livewire\Frontend\Book;

use App\Models\BookCat;
use Livewire\Component;

class Bookscat extends Component
{

    public $bookCats;

    public function mount()
    {
        $this->bookCats = BookCat::latest()->get();
    }
    public function render()
    {
        return view('livewire.frontend.book.bookscat');
    }
}
