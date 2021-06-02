<?php

namespace App\Http\Livewire\Admin\Bookcat;

use App\Models\BookCat;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{


    public $name_ar, $name_en, $name_id, $selected_id, $bookcat;

    public function mount(BookCat $bookcat)
    {
         permation('book.cat.edit');
        $this->bookcat = $bookcat;
        $this->name_ar = $this->bookcat->name_ar;
        $this->name_en = $this->bookcat->name_en;
        $this->name_id = $this->bookcat->name_id;
        $this->selected_id = $this->bookcat->id;
    }



    public function update()
    {
        permation('book.cat.edit');
        $this->validate([
            'name_ar' => 'required|min:1|string',
            'name_en' => 'required|min:1|string',
            'name_id' => 'required|min:1|string',
        ], messages());
        $bookcat = BookCat::findOrFail($this->selected_id);
        $bookcat->update([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.bookcats');
    }

    public function render()
    {
        return view('livewire.admin.bookcat.edit')->layout(ADMIN_LAYOUT);
    }


}
