<?php

namespace App\Http\Livewire\Admin\Instractor;

use Livewire\Component;
use App\Models\Instractor;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{

    use WithFileUploads;
    public $name_ar;
    public $name_en;
    public $name_id;
    public $about_ar;
    public $about_en;
    public $about_id;
    public $image;
    public $preview_image;
    public $word;
    public $word_preview;
    public $selected_id;
    public $meta_description_ar;
    public $meta_description_en;
    public $meta_description_id;
    public $updateMode = false;

    public function mount()
    {
         permation('instractor.create');
    }


    public function store()
    {
        permation('instractor.create');
        $this->validate([
            'name_ar' => 'required|min:1|max:150|string|unique:instractors',
            'name_en' => 'required|min:1|max:150|string|unique:instractors',
            'name_id' => 'required|min:1|max:150|string|unique:instractors',
            'about_ar' => 'required|min:1|string',
            'about_en' => 'required|min:1|string',
            'about_id' => 'required|min:1|string',
            'meta_description_ar' => 'nullable|min:1|string',
            'meta_description_en' => 'nullable|min:1|string',
            'meta_description_id' => 'nullable|min:1|string',
            'image' => 'required|image|max:2048|mimes:png,jpg,jpeg',
            'word' => 'nullable|file|max:2048|mimes:docx',
        ], messages());
        $instractor = Instractor::create([
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'name_id' => $this->name_id,
            'about_ar' => $this->about_ar,
            'about_en' => $this->about_en,
            'about_id' => $this->about_id,
            'slug_ar' => toSLug($this->name_ar),
            'slug_en' => toSLug($this->name_en),
            'slug_id' => toSLug($this->name_id),
            'meta_title_ar' => $this->name_ar,
            'meta_title_en' => $this->name_en,
            'meta_title_id' => $this->name_id,
            'meta_description_ar' => $this->meta_description_ar,
            'meta_description_en' => $this->meta_description_en,
            'meta_description_id' => $this->meta_description_id,
            'admin_id' => Auth::user()->id,
        ]);

        if ($this->image != null) {
            uploadFile($this->image, $instractor, 'default');
            $this->image = null;
        }
        if ($this->word != null) {
            uploadFile($this->word, $instractor, 'file');
            $this->word = null;
        }
        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.instractors');
    }



    public function render()
    {
        return view('livewire.admin.instractor.create')->layout(ADMIN_LAYOUT);
    }

}
