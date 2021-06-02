<?php

namespace App\Http\Livewire\Admin\Encyclopedia;

use Livewire\Component;
use App\Models\Encyclopedia;
use Livewire\WithFileUploads;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;
use Illuminate\Support\Facades\Auth;

class Encyclopediadit extends Component
{

    use WithFileUploads;
    public $encyclopedia;
    public $encyclopediaCats;
    public $selectedState;
    public $encyclopediaSubCats;
    public $encyclopedia_sub_cat_id;
    public $question_ar;
    public $question_en;
    public $question_id;
    public $answer_ar;
    public $answer_en;
    public $answer_id;
    public $selected_id;
    public $meta_description_ar;
    public $meta_description_en;
    public $meta_description_id;
    public $file;
    public $preview_file;

    public function mount(Encyclopedia $encyclopedia)
    {
        permation('encyclopedia.edit');
        $this->encyclopedia = $encyclopedia;
        $this->selected_id = $encyclopedia->id;
        $this->selectedState = $this->encyclopedia->encyclopedia_cat_id;
        $this->encyclopedia_sub_cat_id = $this->encyclopedia->encyclopedia_sub_cat_id;
        $this->encyclopediaCats = EncyclopediaCat::all();
        $this->encyclopediaSubCats = EncyclopediaSubCat::where('encyclopedia_cat_id', $this->selectedState)->get();
        $this->question_ar = $this->encyclopedia->question_ar;
        $this->question_en = $this->encyclopedia->question_en;
        $this->question_id = $this->encyclopedia->question_id;
        $this->answer_ar = $this->encyclopedia->answer_ar;
        $this->answer_en = $this->encyclopedia->answer_en;
        $this->answer_id = $this->encyclopedia->answer_id;
        $this->meta_description_ar = $this->encyclopedia->meta_description_ar;
        $this->meta_description_en = $this->encyclopedia->meta_description_en;
        $this->meta_description_id = $this->encyclopedia->meta_description_id;
        $this->preview_file = getFile($this->encyclopedia, 'default');
    }

    // UPDATED SELECTED encyclopedia_cat_id
    public function updatedSelectedState($state)
    {
        $this->selectedState = $state;
        $this->encyclopediaSubCats = EncyclopediaSubCat::where('encyclopedia_cat_id', $this->selectedState)->get();
    }

    public function update()
    {
        permation('encyclopedia.edit');
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
            'file' => 'nullable|mimes:pdf|max:2048',
        ], messages());
        $encyclopedia = Encyclopedia::findOrFail($this->selected_id);
        $encyclopedia->update(
            [
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
            ]
        );

        if ($this->file != null) {
            deleteFile($encyclopedia, 'default');
            uploadFile($this->file, $encyclopedia, 'default');
            $this->file = null;
        }

        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.encyclopedias');
    }

    public function render()
    {
        return view('livewire.admin.encyclopedia.encyclopediadit')->layout(ADMIN_LAYOUT);
    }
}
