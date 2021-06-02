<?php

namespace App\Http\Livewire\Admin\Instractor;

use Livewire\Component;
use App\Models\Instractor;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{
    use WithFileUploads;
    public $instractor;
    public $name_ar;
    public $name_en;
    public $name_id;
    public $about_ar;
    public $about_en;
    public $about_id;
    public $image;
    public $image_preview;
    public $word;
    public $word_preview;
    public $selected_id;
    public $meta_description_ar;
    public $meta_description_en;
    public $meta_description_id;
    public $updateMode = false;


    public function mount(Instractor $instractor)
    {
         permation('instractor.edit');
        $this->instractor = $instractor;
        // dd(getFile($this->instractor, 'default'));
        $this->selected_id = $instractor->id;
        $this->name_ar = $this->instractor->name_ar;
        $this->name_en = $this->instractor->name_en;
        $this->name_id = $this->instractor->name_id;
        $this->about_ar = $this->instractor->about_ar;
        $this->about_en = $this->instractor->about_en;
        $this->about_id = $this->instractor->about_id;
        $this->meta_description_ar = $this->instractor->meta_description_ar;
        $this->meta_description_en = $this->instractor->meta_description_en;
        $this->meta_description_id = $this->instractor->meta_description_id;
        $this->image_preview = getFile($this->instractor, 'default');
        $this->word_preview = getFile($this->instractor, 'file');
    }


    public function update()
    {
        permation('instractor.edit');
        $this->validate([
            'name_ar' => 'required|min:1|max:150|string',
            'name_en' => 'required|min:1|max:150|string',
            'name_id' => 'required|min:1|max:150|string',
            'about_ar' => 'required|min:1|string',
            'about_en' => 'required|min:1|string',
            'about_id' => 'required|min:1|string',
            'meta_description_ar' => 'nullable|min:1|string',
            'meta_description_en' => 'nullable|min:1|string',
            'meta_description_id' => 'nullable|min:1|string',
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg',
            'word' => 'nullable|file|max:2048|mimes:docx',
        ], messages());
        $instractor = Instractor::findOrFail($this->selected_id);
        $instractor->update([
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
            deleteFile($instractor, 'default');
            uploadFile($this->image, $instractor, 'default');
            $this->image = null;
        }
        if ($this->word != null) {
            deleteFile($instractor, 'file');
            uploadFile($this->word, $instractor, 'file');
            $this->word = null;
        }
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.instractors');
    }

    public function render()
    {
        return view('livewire.admin.instractor.edit')->layout(ADMIN_LAYOUT);
    }

}
