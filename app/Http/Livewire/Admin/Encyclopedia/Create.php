<?php

namespace App\Http\Livewire\Admin\Encyclopedia;

use Livewire\Component;
use App\Models\Encyclopedia;
use Livewire\WithFileUploads;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    use WithFileUploads;
    public $encyclopediaCats;
    public $encyclopediaSubCats;
    public $selectedState;
    public $encyclopedia_sub_cat_id;
    public $question_ar;
    public $question_en;
    public $question_id;
    public $answer_ar;
    public $answer_en;
    public $answer_id;
    public $meta_description_ar;
    public $meta_description_en;
    public $meta_description_id;
    public $file;

    public function mount()
    {
         permation('encyclopedia.create');
        $this->encyclopediaCats = EncyclopediaCat::all();
        $this->encyclopediaSubCats = collect();
    }

    public function updatedSelectedState($state)
    {
        $this->selectedState = $state;
        $this->encyclopediaSubCats = EncyclopediaSubCat::where('encyclopedia_cat_id', $this->selectedState)->get();
    }

    public function store()
    {
         permation('encyclopedia.create');
        $this->validate([
            'selectedState' => 'required|integer|exists:encyclopedia_cats,id',
            'encyclopedia_sub_cat_id' => 'required|integer|exists:encyclopedia_sub_cats,id',
            'question_ar' => 'required|min:1|max:200|string',
            'question_en' => 'required|min:1|max:200|string',
            'question_id' => 'required|min:1|max:200|string',
            'answer_ar' => 'required|min:1|max:200|string',
            'answer_en' => 'required|min:1|max:200|string',
            'answer_id' => 'required|min:1|max:200|string',
            'meta_description_ar' => 'nullable|min:1|string',
            'meta_description_en' => 'nullable|min:1|string',
            'meta_description_id' => 'nullable|min:1|string',
            'file' => 'required|mimes:pdf|max:2048',
        ], messages());
        // CREATE DATA
        $encyclopedia = Encyclopedia::create([
            'encyclopedia_cat_id' => $this->selectedState,
            'encyclopedia_sub_cat_id' =>  $this->encyclopedia_sub_cat_id,
            'question_ar' => $this->question_ar,
            'question_en' => $this->question_en,
            'question_id' => $this->question_id,
            'answer_ar' => $this->answer_ar,
            'answer_en' => $this->answer_en,
            'answer_id' => $this->answer_id,
            'slug_ar' => toSlug($this->question_ar),
            'slug_en' => toSlug($this->question_en),
            'slug_id' => toSlug($this->question_id),
            'meta_description_ar' => $this->meta_description_ar,
            'meta_description_en' => $this->meta_description_en,
            'meta_description_id' => $this->meta_description_id,
            'admin_id' => Auth::user()->id,
        ]);
        if ($this->file != null) {
            deleteFile($encyclopedia, 'default');
            uploadFile($this->file, $encyclopedia, 'default');
            $this->file = null;
        }
        session()->flash('success', __('app.data_created'));
        // REDIRECT TO
        return redirect()->route('admin.encyclopedias');
    }


    public function render()
    {
        return view('livewire.admin.encyclopedia.create')->layout(ADMIN_LAYOUT);
    }
}
