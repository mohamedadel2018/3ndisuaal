<?php

namespace App\Http\Livewire\Admin\Playlist;

use Livewire\Component;
use App\Models\Playlist as PlaylistModel;
class Playlist extends Component
{
    public $playlist;
    public function mount(PlaylistModel $playlist)
    {
         permation('playlist.view');
        $this->playlist = $playlist;
    }
    public function render()
    {
        return view('livewire.admin.playlist.playlist')->layout(ADMIN_LAYOUT);
    }

}
