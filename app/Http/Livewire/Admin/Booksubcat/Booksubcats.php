<?php

namespace App\Http\Livewire\Admin\Booksubcat;

use App\Models\BookCat;
use Livewire\Component;
use App\Models\BookSubCat;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Booksubcats extends Component
{


    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $book_cat_id, $name_ar, $name_en, $name_id, $selected_id, $term;
    public $updateMode = false;
    // protected $rules = ;

    public function mount()
    {
         permation('book.subcat.view');
    }

    public function delete($id)
    {
         permation('book.subcat.delete');
        $bookSubCat = BookSubCat::findOrFail($id);
        if ($bookSubCat->books()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_books_first'));
        }
        $bookSubCat->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $bookSubCats = BookSubCat::with('bookCat')->select(['book_cat_id', 'id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        $bookCats = BookCat::all();
        return view('livewire.admin.booksubcat.booksubcats', [
            'bookSubCats' => $bookSubCats,
            'bookCats' => $bookCats,
        ])->layout(ADMIN_LAYOUT);
    }


}
