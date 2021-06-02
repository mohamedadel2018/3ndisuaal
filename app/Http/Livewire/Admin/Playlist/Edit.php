<?php

namespace App\Http\Livewire\Admin\Playlist;

use Livewire\Component;
use App\Models\Playlist;
use App\Models\BookSubCat;
use App\Models\Instractor;
use App\Models\ProgramCat;
use App\Models\ProgramSubCat;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{
    public $playlist;
    public $programCats;
    public $selectedState;
    public $programSubCats;
    public $instractors;
    public $program_sub_cat_id;
    public $instractor_id;
    public $name_ar;
    public $name_en;
    public $name_id;
    public $video_ar;
    public $video_en;
    public $video_id;
    public $selected_id;
    public $meta_description_ar;
    public $meta_description_en;
    public $meta_description_id;
    public $is_featured = 0;


    public function mount(Playlist $playlist)
    {
        permation('playlist.edit');
        $this->is_featured = $this->playlist->is_featured;
        // dd($this->is_featured);
        $this->playlist = $playlist;
        $this->selected_id = $playlist->id;
        $this->selectedState = $this->playlist->program_cat_id;
        $this->program_sub_cat_id = $this->playlist->program_sub_cat_id;
        $this->programCats = ProgramCat::all();
        $this->programSubCats = ProgramSubCat::where('program_cat_id', $this->selectedState)->get();
        $this->instractors = Instractor::all();
        $this->name_ar = $this->playlist->name_ar;
        $this->name_en = $this->playlist->name_en;
        $this->name_id = $this->playlist->name_id;
        $this->video_ar = $this->playlist->video_ar;
        $this->video_en = $this->playlist->video_en;
        $this->video_id = $this->playlist->video_id;
        $this->instractor_id = $this->playlist->instractor_id;
        $this->meta_description_ar = $this->playlist->meta_description_ar;
        $this->meta_description_en = $this->playlist->meta_description_en;
        $this->meta_description_id = $this->playlist->meta_description_id;
    }

    // UPDATED SELECTED book_cat_id
    public function updatedSelectedState($state)
    {
        $this->selectedState = $state;
        $this->bookSubCats = BookSubCat::where('book_cat_id', $this->selectedState)->get();
    }

    public function update()
    {
         permation('playlist.edit');
        $isFeatured = $this->is_featured == false ? 0 : 1;
        $this->validate([
            'selectedState' => 'required|integer|exists:program_cats,id',
            'program_sub_cat_id' => 'required|integer|exists:program_sub_cats,id',
            'instractor_id' => 'required|integer|exists:instractors,id',
            'name_ar' => 'required|min:1|max:200|string',
            'name_en' => 'required|min:1|max:200|string',
            'name_id' => 'required|min:1|max:200|string',
            'video_ar' => 'required|min:1|max:200|string',
            'video_en' => 'required|min:1|max:200|string',
            'video_id' => 'required|min:1|max:200|string',
            'meta_description_ar' => 'nullable|min:1|string',
            'meta_description_en' => 'nullable|min:1|string',
            'meta_description_id' => 'nullable|min:1|string',
        ], messages());
        $playlist = Playlist::findOrFail($this->selected_id);
        $playlist->update(
            [
                'program_cat_id' => $this->selectedState,
                'program_sub_cat_id' =>  $this->program_sub_cat_id,
                'instractor_id' => $this->instractor_id,
                'name_ar' => $this->name_ar,
                'name_en' => $this->name_en,
                'name_id' => $this->name_id,
                'video_ar' => $this->video_ar,
                'video_en' => $this->video_en,
                'video_id' => $this->video_id,
                'meta_title_ar' => $this->name_ar,
                'meta_title_en' => $this->name_en,
                'meta_title_id' => $this->name_id,
                'slug_ar' => toSlug($this->name_ar),
                'slug_en' => toSlug($this->name_en),
                'slug_id' => toSlug($this->name_id),
                'meta_description_ar' => $this->meta_description_ar,
                'meta_description_en' => $this->meta_description_en,
                'meta_description_id' => $this->meta_description_id,
                'is_featured' => $isFeatured,
                'admin_id' => Auth::user()->id,
            ]
        );
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.playlists');
    }

    public function render()
    {
        return view('livewire.admin.playlist.edit')->layout(ADMIN_LAYOUT);
    }
}
