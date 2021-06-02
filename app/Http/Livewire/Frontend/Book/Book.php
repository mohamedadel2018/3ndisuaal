<?php

namespace App\Http\Livewire\Frontend\Book;

use App\Models\BookCat;
use Livewire\Component;
use App\Models\BookSubCat;
use Livewire\WithPagination;
use App\Models\Book as BookModel;

class Book extends Component
{
    use WithPagination;
    public $book;
    public $bookCat;
    public $bookSubCats;
    public $bookCats;


    public function mount(BookModel $book, $slug)
    {
        $this->book = $book;
        $this->bookCat =   BookCat::find($this->book->book_cat_id);
        $this->bookSubCats = BookSubCat::where('book_cat_id', $this->book->book_cat_id)->get();
        $this->bookCats = BookCat::inRandomOrder()->take(10)->get();
    }
    public function render()
    {
        $this->book->increment('views');
        $this->book->save();
        return view('livewire.frontend.book.book');
    }
}
