<?php

namespace App\Http\Livewire\Admin\Playlist;

use Livewire\Component;
use App\Models\Playlist;
use App\Models\Instractor;
use App\Models\ProgramCat;
use App\Models\ProgramSubCat;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
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
    public $is_featured = 0;
    public $meta_description_ar;
    public $meta_description_en;
    public $meta_description_id;

    public function mount()
    {
         permation('playlist.create');
        $this->programCats = ProgramCat::all();
        $this->programSubCats = ProgramSubCat::where('program_cat_id', $this->selectedState)->get();
        $this->instractors = Instractor::all();

    }

    // UPDATED SELECTED program_cat_id
    public function updatedSelectedState($state)
    {
        $this->selectedState = $state;
        $this->programSubCats = ProgramSubCat::where('program_cat_id', $this->selectedState)->get();
    }

    public function store()
    {
         permation('playlist.create');
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
            'is_featured' => 'required|in:0,1',
        ], messages());
        $playlist = Playlist::create(
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
                'is_featured' => $this->is_featured,
                'admin_id' => Auth::user()->id,
            ]
        );
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.playlists');
    }


    public function render()
    {
        return view('livewire.admin.playlist.create')->layout(ADMIN_LAYOUT);
    }

}
