<?php

namespace App\Http\Livewire\Admin\Program;

use App\Models\Program;
use Livewire\Component;
use App\Models\Playlist;
use App\Models\Instractor;
use App\Models\ProgramCat;
use App\Models\ProgramSubCat;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Programedit extends Component
{

    use WithFileUploads;
    public $program;
    public $programCats;
    public $selectedState;
    public $programSubCats;
    public $instractors;
    public $playlists;
    public $program_sub_cat_id;
    public $instractor_id;
    public $playlist_id;
    public $image;
    public $title_ar;
    public $title_en;
    public $title_id;
    public $video_ar;
    public $video_en;
    public $video_id;
    public $sound_ar;
    public $sound_en;
    public $sound_id;
    public $about_ar;
    public $about_en;
    public $about_id;
    public $selected_id;
    public $meta_description_ar;
    public $meta_description_en;
    public $meta_description_id;

    public function mount(Program $program)
    {
        permation('program.edit');
        $this->program = $program;
        $this->selected_id = $program->id;
        $this->programCats = ProgramCat::all();
        $this->programSubCats = ProgramSubCat::where('program_cat_id', $this->selectedState)->get();
        $this->playlists = Playlist::all();
        $this->title_ar = $this->program->title_ar;
        $this->title_en = $this->program->title_en;
        $this->title_id = $this->program->title_id;
        $this->video_ar = $this->program->video_ar;
        $this->video_en = $this->program->video_en;
        $this->video_id = $this->program->video_id;
        $this->sound_ar = $this->program->sound_ar;
        $this->sound_en = $this->program->sound_en;
        $this->sound_id = $this->program->sound_id;
        $this->about_ar = $this->program->about_ar;
        $this->about_en = $this->program->about_en;
        $this->about_id = $this->program->about_id;
        $this->playlist_id = $this->program->playlist_id;
        $this->meta_description_ar = $this->program->meta_description_ar;
        $this->meta_description_en = $this->program->meta_description_en;
        $this->meta_description_id = $this->program->meta_description_id;
    }

    // UPDATED SELECTED program_cat_id
    public function updatedSelectedState($state)
    {
        $this->selectedState = $state;
        $this->programSubCats = ProgramSubCat::where('program_cat_id', $this->selectedState)->get();
    }

    public function update()
    {
        permation('program.edit');
        $this->validate([
            'playlist_id' => 'required|integer|exists:playlists,id',
            'title_ar' => 'required|min:1|max:200|string',
            'title_en' => 'required|min:1|max:200|string',
            'title_id' => 'required|min:1|max:200|string',
            'video_ar' => 'required|min:1|max:200|string',
            'video_en' => 'required|min:1|max:200|string',
            'video_id' => 'required|min:1|max:200|string',
            'sound_ar' => 'required|min:1|max:200|string',
            'sound_en' => 'required|min:1|max:200|string',
            'sound_id' => 'required|min:1|max:200|string',
            'about_ar' => 'nullable|string',
            'about_en' => 'nullable|string',
            'about_id' => 'nullable|string',
            'meta_description_ar' => 'nullable|min:1|string',
            'meta_description_en' => 'nullable|min:1|string',
            'meta_description_id' => 'nullable|min:1|string',
        ], messages());
        $program = Program::findOrFail($this->selected_id);
        $program->update(
            [
                'playlist_id' => $this->playlist_id,
                'title_ar' => $this->title_ar,
                'title_en' => $this->title_en,
                'title_id' => $this->title_id,
                'video_ar' => $this->video_ar,
                'video_en' => $this->video_en,
                'video_id' => $this->video_id,
                'sound_ar' => $this->sound_ar,
                'sound_en' => $this->sound_en,
                'sound_id' => $this->sound_id,
                'about_ar' => $this->about_ar,
                'about_en' => $this->about_en,
                'about_id' => $this->about_id,
                'meta_title_ar' => $this->title_ar,
                'meta_title_en' => $this->title_en,
                'meta_title_id' => $this->title_id,
                'slug_ar' => toSlug($this->title_ar),
                'slug_en' => toSlug($this->title_en),
                'slug_id' => toSlug($this->title_id),
                'meta_description_ar' => $this->meta_description_ar,
                'meta_description_en' => $this->meta_description_en,
                'meta_description_id' => $this->meta_description_id,
                'admin_id' => Auth::user()->id,
            ]
        );

        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.programs');
    }

    public function render()
    {
        return view('livewire.admin.program.programedit')->layout(ADMIN_LAYOUT);
    }
}
