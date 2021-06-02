<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\Book;
use App\Models\BookCat;
use Livewire\Component;
use App\Models\BookSubCat;
use App\Models\Instractor;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Bookedit extends Component
{
    use WithFileUploads;
    public $book;
    public $bookCats;
    public $selectedState;
    public $bookSubCats;
    public $instractors;
    public $book_sub_cat_id;
    public $instractor_id;
    public $image;
    public $file;
    public $title_ar;
    public $title_en;
    public $title_id;
    public $about_ar;
    public $about_en;
    public $about_id;
    public $selected_id;
    public $meta_description_ar;
    public $meta_description_en;
    public $meta_description_id;
    public $image_preview;
    public $preview_file;


    public function mount(Book $book)
    {
         permation('book.edit');
        $this->book = $book;
        $this->selected_id = $book->id;
        $this->selectedState = $this->book->book_cat_id;
        $this->book_sub_cat_id = $this->book->book_sub_cat_id;
        $this->bookCats = BookCat::all();
        $this->bookSubCats = BookSubCat::where('book_cat_id', $this->selectedState)->get();
        $this->instractors = Instractor::all();
        $this->title_ar = $this->book->title_ar;
        $this->title_en = $this->book->title_en;
        $this->title_id = $this->book->title_id;
        $this->about_ar = $this->book->about_ar;
        $this->about_en = $this->book->about_en;
        $this->about_id = $this->book->about_id;
        $this->instractor_id = $this->book->instractor_id;
        $this->meta_description_ar = $this->book->meta_description_ar;
        $this->meta_description_en = $this->book->meta_description_en;
        $this->meta_description_id = $this->book->meta_description_id;
        $this->image_preview = getFile($this->book,'default');
        $this->preview_file = getFile($this->book,'file');
    }

    // UPDATED SELECTED book_cat_id
    public function updatedSelectedState($state)
    {
        $this->selectedState = $state;
        $this->bookSubCats = BookSubCat::where('book_cat_id', $this->selectedState)->get();
    }

    public function update()
    {
         permation('book.edit');
        $this->validate([
            'selectedState' => 'required|integer|exists:book_cats,id',
            'book_sub_cat_id' => 'required|integer|exists:book_sub_cats,id',
            'instractor_id' => 'required|integer|exists:instractors,id',
            'title_ar' => 'required|min:1|max:200|string',
            'title_en' => 'required|min:1|max:200|string',
            'title_id' => 'required|min:1|max:200|string',
            'about_ar' => 'nullable|string',
            'about_en' => 'nullable|string',
            'about_id' => 'nullable|string',
            'meta_description_ar' => 'nullable|min:1|string',
            'meta_description_en' => 'nullable|min:1|string',
            'meta_description_id' => 'nullable|min:1|string',
            'image' => 'nullable|image|max:2048|mimes:jpeg,jpg,png',
            'file' => 'nullable|file|max:4094|mimes:pdf',
        ], messages());
        $book = Book::findOrFail($this->selected_id);
        $book->update(
            [
                'book_cat_id' => $this->selectedState,
                'book_sub_cat_id' =>  $this->book_sub_cat_id,
                'instractor_id' => $this->instractor_id,
                'title_ar' => $this->title_ar,
                'title_en' => $this->title_en,
                'title_id' => $this->title_id,
                'about_ar' => $this->about_ar,
                'about_en' => $this->about_en,
                'about_id' => $this->about_id,
                'meta_title_ar' => $this->title_ar,
                'meta_title_en' => $this->title_en,
                'meta_title_id' => $this->title_id,
                'slug_ar' => toSlug($this->title_ar),
                'slug_en' => toSlug($this->title_en),
                'slug_id' => toSlug($this->title_id),
                'meta_description_ar' => $this->meta_description_ar,
                'meta_description_en' => $this->meta_description_en,
                'meta_description_id' => $this->meta_description_id,
                'admin_id' => Auth::user()->id,
            ]
        );
        if ($this->image != null) {
            deleteFile($book, 'default');
            uploadFile($this->image, $book, 'default');
            $this->image = null;
        }
        if ($this->file != null) {
            deleteFile($book, 'file');
            uploadFile($this->file, $book, 'file');
            $this->file = null;
        }
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.books');
    }

    public function render()
    {
        return view('livewire.admin.book.bookedit')->layout(ADMIN_LAYOUT);
    }
}
