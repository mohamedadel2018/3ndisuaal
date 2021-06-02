<?php

namespace App\Http\Livewire\Frontend\Instractor;

use App\Models\Book;
use Livewire\Component;
use App\Models\Playlist;
use App\Models\Instractor as InstractorModel;

class Instractor extends Component
{
    public $instractor;
    public $books;
    public $playlists;
    public $booksCount;
    public $playlistsCount;

    public function mount(InstractorModel $instractor,$slug)
    {
         permation('instractor.view');
        $this->instractor = $instractor;
        $this->books = Book::select(
            'id',
            'title_ar',
            'title_en',
            'title_id',
            'slug_ar',
            'slug_en',
            'slug_id')->where('instractor_id',$this->instractor->id)->inRandomOrder()->take(10)->get();
        $this->playlists =
        $this->playlists = Playlist::select(
            'id',
            'name_ar',
            'name_en',
            'name_id',
        )->where('instractor_id', $this->instractor->id)->inRandomOrder()->take(10)->get();
        $this->booksCount = $this->instractor->books()->count();
        $this->playlistsCount = $this->instractor->playlists()->count();
    }

    public function render()
    {
        return view('livewire.frontend.instractor.instractor');
    }
}
