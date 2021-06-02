<?php

namespace App\Http\Livewire\Frontend\Program;

use App\Models\Program;
use Livewire\Component;
use App\Models\Playlist;
use App\Models\ProgramCat;
use Livewire\WithPagination;
use App\Models\ProgramSubCat;

class Programs extends Component
{

    use WithPagination;

    public $playlistId;
    // public $programCatId;
    public $playlist;
    public $programSubCats;
    public $programCats;
    public $search = '';
    public $playlistViewsCount;
    public $programsCount;
    public $isWatchModalOpen;
    public $videoUrl;
    public $videoTitle;
    public $otherPlaylists;

    public function mount($playlistId)
    {
        $this->isWatchModalOpen = false;
        $this->playlistId = $playlistId;
        // $this->programCatId = $programCatId;
        $this->playlist = Playlist::find($this->playlistId);
        $this->programSubCats = ProgramSubCat::where('program_cat_id', $this->playlist->program_cat_id)->get();
        $this->programCats = ProgramCat::inRandomOrder()->take(10)->get();
        $this->playlistViewsCount = $this->playlist->programs->sum('views');
        $this->programsCount = $this->playlist->programs->count();
        $this->otherPlaylists = Playlist::inRandomOrder()->take(10)->get();
    }

    public function openWatchModal($title,$video,$programId)
    {
        $prog = Program::find($programId);
        $prog->increment('views');
        $this->isWatchModalOpen = true;
        $this->videoTitle = $title;
        $this->videoUrl = $video;

    }

    public function closeWatchModal()
    {
        $this->isWatchModalOpen = false;
    }

    public function render()
    {
        $programs = Program::where('playlist_id', $this->playlistId)->where('title_' . app()->getLocale(), 'LIKE', '%' . trim($this->search) . '%')->latest()->paginate(PG);
        return view('livewire.frontend.program.programs', [
            'programs' => $programs,
        ]);
    }

}
