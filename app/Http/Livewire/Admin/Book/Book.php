<?php

namespace App\Http\Livewire\Admin\Book;

use Livewire\Component;
use App\Models\Book as BookModel;

class Book extends Component
{


    public $book;
    public function mount(BookModel $book)
    {
         permation('book.view');
        $this->book = $book;
    }
    public function render()
    {
        return view('livewire.admin.book.book')->layout(ADMIN_LAYOUT);
    }

}
