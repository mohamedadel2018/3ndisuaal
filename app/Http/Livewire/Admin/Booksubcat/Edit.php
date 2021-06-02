<?php

namespace App\Http\Livewire\Admin\Booksubcat;

use App\Models\BookCat;
use Livewire\Component;
use App\Models\BookSubCat;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{

    public $booksubcat;
    public $bookCats;
    public $book_cat_id;
    public $name_ar;
    public $name_en;
    public $name_id;
    public $selected_id;

    public function mount(BookSubCat $booksubcat)
    {
        permation('book.subcat.edit');
        $this->booksubcat = $booksubcat;
        $this->selected_id = $booksubcat->id;
        $this->book_cat_id = $booksubcat->book_cat_id;
        $this->bookCats = BookCat::all();
        $this->name_ar = $this->booksubcat->name_ar;
        $this->name_en = $this->booksubcat->name_en;
        $this->name_id = $this->booksubcat->name_id;
    }

    public function update()
    {
        permation('book.subcat.edit');
        $this->validate([
            'book_cat_id' => 'required|integer|exists:book_cats,id',
            'name_ar' => 'required|min:1|max:200|string',
            'name_en' => 'required|min:1|max:200|string',
            'name_id' => 'required|min:1|max:200|string',
        ], messages());
        $bookSubCat = BookSubCat::findOrFail($this->selected_id);
        $bookSubCat->update(
            [
                'book_cat_id' => $this->book_cat_id,
                'name_ar' => $this->name_ar,
                'name_en' => $this->name_en,
                'name_id' => $this->name_id,
                'admin_id' => Auth::user()->id,
            ]
        );

        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.booksubcats');
    }

    public function render()
    {
        return view('livewire.admin.booksubcat.edit')->layout(ADMIN_LAYOUT);
    }
}
