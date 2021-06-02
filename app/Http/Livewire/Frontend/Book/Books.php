<?php

namespace App\Http\Livewire\Frontend\Book;

use App\Models\Book as BookModel;
use App\Models\BookCat;
use Livewire\Component;
use App\Models\BookSubCat;
use Livewire\WithPagination;

class Books extends Component
{

    use WithPagination;
    public $bookCatId;
    public $bookCat;
    public $bookSubCats;
    public $bookCats;
    public $search = '';


    public function mount($bookCatId)
    {
        $this->bookCatId = $bookCatId;
        $this->bookCat =   BookCat::find($this->bookCatId);
        $this->bookSubCats = BookSubCat::where('book_cat_id', $this->bookCatId)->get();
        $this->bookCats = BookCat::inRandomOrder()->take(10)->get();
    }
    public function render()
    {
        $books = BookModel::where('book_cat_id', $this->bookCatId)->where('title_' . app()->getLocale(), 'LIKE', '%' . trim($this->search) . '%')->latest()->paginate(PGA);
        return view('livewire.frontend.book.books',[
            'books' => $books,
        ]);
    }
}
