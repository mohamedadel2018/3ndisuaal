<?php

namespace App\Http\Livewire\Frontend\Program;

use App\Models\Program;
use Livewire\Component;
use App\Models\Playlist;
use App\Models\ProgramCat;
use Livewire\WithPagination;
use App\Models\ProgramSubCat;

class Playlists extends Component
{
    use WithPagination;
    public $search = '';
    public $programCatId;
    public $programCat;
    public $programCats;
    public $programSubCats;
    public $otherPlaylists;


    public function mount($programCatId)
    {
        $this->programCatId = $programCatId;
        $this->programCat = ProgramCat::find($this->programCatId);
        $this->programCats = ProgramCat::inRandomOrder()->take(10)->get();
        $this->programSubCats = ProgramSubCat::where('program_cat_id', $this->programCatId)->get();
        $this->otherPlaylists = Playlist::inRandomOrder()->take(10)->get();

    }

    public function render()
    {
        $palylists = Playlist::where('program_cat_id', $this->programCatId)->latest()->get();
        return view('livewire.frontend.program.playlists',[
            'playlists' => $palylists,
        ]);
    }
}
