<?php

namespace App\Http\Livewire\Admin\Bookcat;

use App\Models\BookCat;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Bookcats extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'resetEditModal',
        'delete'
    ];
    public $name_ar, $name_en, $name_id, $selected_id, $term;
    public $updateMode = false;

    public function mount()
    {
         permation('book.cat.view');
    }

    public function delete($id)
    {
         permation('book.cat.delete');
        $bookCat = BookCat::findOrFail($id);
        if ($bookCat->bookSubCats()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_sub_categories_first'));
        }
        if ($bookCat->books()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_books_first'));
        }
        $bookCat->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $bookCats = BookCat::select(['id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.bookcat.bookcats', [
            'bookCats' => $bookCats,
        ])->layout(ADMIN_LAYOUT);
    }

}
