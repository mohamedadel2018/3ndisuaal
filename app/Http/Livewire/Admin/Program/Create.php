<?php

namespace App\Http\Livewire\Admin\Program;

use App\Models\Program;
use Livewire\Component;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    public $playlists;
    public $playlist_id;
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
    public $meta_description_ar;
    public $meta_description_en;
    public $meta_description_id;

    public function mount()
    {
         permation('program.create');
        $this->playlists = Playlist::all();
    }



    public function store()
    {
         permation('program.create');
        $this->validate([
            'playlist_id' => 'required|integer|exists:playlists,id',
            'title_ar' => 'required|min:1|max:200|string|unique:programs',
            'title_en' => 'required|min:1|max:200|string|unique:programs',
            'title_id' => 'required|min:1|max:200|string|unique:programs',
            'video_ar' => 'required|min:1|max:200|string|unique:programs',
            'video_en' => 'required|min:1|max:200|string|unique:programs',
            'video_id' => 'required|min:1|max:200|string|unique:programs',
            'sound_ar' => 'nullable|min:1|string',
            'sound_en' => 'nullable|min:1|string',
            'sound_id' => 'nullable|min:1|string',
            'about_ar' => 'nullable|string',
            'about_en' => 'nullable|string',
            'about_id' => 'nullable|string',
            'meta_description_ar' => 'nullable|min:1|string',
            'meta_description_en' => 'nullable|min:1|string',
            'meta_description_id' => 'nullable|min:1|string',
        ], messages());
        $program = Program::create([
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
        ]);

        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.programs');
    }


    public function render()
    {
        return view('livewire.admin.program.create')->layout(ADMIN_LAYOUT);
    }
}
