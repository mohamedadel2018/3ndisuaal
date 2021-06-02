<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\Book;
use App\Models\BookCat;
use Livewire\Component;
use App\Models\BookSubCat;
use App\Models\Instractor;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar\Facade as Debugbar;


class Books extends Component
{

    use WithPagination, WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'resetEditModal',
        'delete'
    ];
    public $book_cat_id, $book_sub_cat_id, $instractor_id, $title_ar, $title_en, $title_id, $about_ar, $about_en, $about_id, $image, $preview_image, $selected_id, $term, $meta_description_ar, $meta_description_en, $meta_description_id;
    public $is_featured = 0;
    public $bookSubCats = null;
    public $updateMode = false;
    public $selectedState = NULL;
    public $selected_sub_category_name = NULL;

    public function mount()
    {
         permation('book.view');
        $this->bookSubCats = collect();
    }
    // UPDATED SELECTED book_cat_id
    public function updatedSelectedState($state)
    {
        $this->book_cat_id = $state;
        if (!is_null($state)) {
            $this->bookSubCats = BookSubCat::where('book_cat_id', $state)->get();
        }
    }

    // SET PLAYLIST AS FEATURED
    public function setFeatured($featuredCase, Book $book)
    {
         permation('book.feature');
        $book->update(['is_featured' => $featuredCase]);
        // REDIRECT TO
        session()->flash('success', __('app.data_updated'));
    }


    public function delete($id)
    {
         permation('book.delete');
        $book = Book::findOrFail($id);

        deleteFile($book, 'default');
        deleteFile($book, 'file');
        $book->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $bookCats = BookCat::all();
        $instractors = Instractor::all();
        $books = Book::with('images', 'bookCat', 'bookSubCat')->select(['id', 'title_ar', 'title_en', 'title_id', 'book_cat_id', 'book_sub_cat_id', 'instractor_id', 'is_featured','views'])->where('title_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.book.books', [
            'books' => $books,
            'bookCats' => $bookCats,
            'instractors' => $instractors,
        ])->layout(ADMIN_LAYOUT);
    }

}
