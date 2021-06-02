<?php

namespace App\Http\Livewire\Admin\Booksubcat;

use App\Models\BookCat;
use Livewire\Component;
use App\Models\BookSubCat;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{



    public $bookCats;
    public $book_cat_id;
    public $name_ar;
    public $name_en;
    public $name_id;

    public function mount()
    {
         permation('book.subcat.create');
        $this->bookCats = BookCat::all();
    }



    public function store()
    {
        permation('book.subcat.create');
        $this->validate([
            'book_cat_id' => 'required|integer|exists:book_cats,id',
            'name_ar' => 'required|min:1|max:200|string|unique:book_sub_cats',
            'name_en' => 'required|min:1|max:200|string|unique:book_sub_cats',
            'name_id' => 'required|min:1|max:200|string|unique:book_sub_cats',
        ], messages());
        BookSubCat::create([
            'book_cat_id' => $this->book_cat_id,
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);

        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.booksubcats');
    }


    public function render()
    {
        return view('livewire.admin.booksubcat.create')->layout(ADMIN_LAYOUT);
    }

}
