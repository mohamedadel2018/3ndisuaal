<?php

namespace App\Http\Livewire\Frontend\Book;

use App\Models\Book;
use App\Models\BookCat;
use Livewire\Component;
use App\Models\BookSubCat;
use Livewire\WithPagination;

class Bookssubcat extends Component
{
    use WithPagination;
    public $bookSubCatId;
    public $bookSubCat;
    public $bookSubCats;
    public $bookCats;
    public $search = '';


    public function mount($bookSubCatId)
    {
        $this->bookSubCatId = $bookSubCatId;
        $this->bookSubCat =   BookSubCat::find($this->bookSubCatId);
        $this->bookSubCats = BookSubCat::with('bookCat')->where('book_cat_id', $this->bookSubCat->bookCat->id)->get();
        $this->bookCats = BookCat::inRandomOrder()->take(10)->get();
    }
    public function render()
    {
        $books = Book::where('book_sub_cat_id', $this->bookSubCatId)->where('title_' . app()->getLocale(), 'LIKE', '%' . trim($this->search) . '%')->latest()->paginate(PGA);
        return view('livewire.frontend.book.bookssubcat',[
            'books' => $books,
        ]);
    }
}
