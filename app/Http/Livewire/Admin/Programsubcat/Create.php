<?php

namespace App\Http\Livewire\Admin\Programsubcat;

use Livewire\Component;
use App\Models\ProgramCat;
use App\Models\ProgramSubCat;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{


    public $programCats;
    public $program_cat_id;
    public $name_ar;
    public $name_en;
    public $name_id;

    public function mount()
    {
         permation('program.subcat.create');
        $this->programCats = ProgramCat::all();
    }



    public function store()
    {
         permation('program.subcat.create');
        $this->validate([
            'program_cat_id' => 'required|integer|exists:program_cats,id',
            'name_ar' => 'required|min:1|max:200|string|unique:program_sub_cats',
            'name_en' => 'required|min:1|max:200|string|unique:program_sub_cats',
            'name_id' => 'required|min:1|max:200|string|unique:program_sub_cats',
        ], messages());
        ProgramSubCat::create([
            'program_cat_id' => $this->program_cat_id,
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'admin_id' => Auth::user()->id,
        ]);

        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.programsubcats');
    }


    public function render()
    {
        return view('livewire.admin.programsubcat.create')->layout(ADMIN_LAYOUT);
    }

}
