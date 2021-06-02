<?php

namespace App\Http\Livewire\Frontend\Program;

use Livewire\Component;
use App\Models\ProgramCat;
use Livewire\WithPagination;
use App\Models\ProgramSubCat;
use App\Models\Playlist;

class Playlistssubcat extends Component
{
    use WithPagination;
    public $search = '';
    public $programSubCatId;
    public $programCat;
    public $programSubCat;
    public $programCats;
    public $programSubCats;
    public $otherPlaylists;


    public function mount($programSubCatId)
    {
        $this->programSubCatId = $programSubCatId;
        $this->programSubCat = ProgramSubCat::find($this->programSubCatId);
        $this->programCat = ProgramCat::find($this->programSubCat->program_cat_id);
        $this->programCats = ProgramCat::inRandomOrder()->take(10)->get();
        $this->programSubCats = ProgramSubCat::where('program_cat_id', $this->programSubCat->program_cat_id)->get();
        $this->otherPlaylists = Playlist::inRandomOrder()->take(10)->get();
    }

    public function render()
    {
        $palylists = Playlist::where('program_sub_cat_id', $this->programSubCatId)->latest()->get();
        return view('livewire.frontend.program.playlistssubcat', [
            'playlists' => $palylists,
        ]);
    }
}
