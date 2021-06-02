<?php

namespace App\Http\Livewire\Admin\Programsubcat;

use Livewire\Component;
use App\Models\ProgramCat;
use App\Models\ProgramSubCat;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{
    public $programsubcat;
    public $programCats;
    public $program_cat_id;
    public $name_ar;
    public $name_en;
    public $name_id;
    public $selected_id;

    public function mount(ProgramSubCat $programsubcat)
    {
         permation('program.subcat.edit');
        $this->programsubcat = $programsubcat;
        $this->selected_id = $programsubcat->id;
        $this->program_cat_id = $programsubcat->program_cat_id;
        $this->programCats = ProgramCat::all();
        $this->name_ar = $this->programsubcat->name_ar;
        $this->name_en = $this->programsubcat->name_en;
        $this->name_id = $this->programsubcat->name_id;
    }

    public function update()
    {
         permation('program.subcat.edit');
        $this->validate([
            'program_cat_id' => 'required|integer|exists:program_cats,id',
            'name_ar' => 'required|min:1|max:200|string',
            'name_en' => 'required|min:1|max:200|string',
            'name_id' => 'required|min:1|max:200|string',
        ], messages());
        $programSubCat = ProgramSubCat::findOrFail($this->selected_id);
        $programSubCat->update(
            [
                'program_cat_id' => $this->program_cat_id,
                'name_ar' => $this->name_ar,
                'name_en' => $this->name_en,
                'name_id' => $this->name_id,
                'admin_id' => Auth::user()->id,
            ]
        );

        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.programsubcats');
    }

    public function render()
    {
        return view('livewire.admin.programsubcat.edit')->layout(ADMIN_LAYOUT);
    }

}
