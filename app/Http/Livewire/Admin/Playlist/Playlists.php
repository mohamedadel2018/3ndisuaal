<?php

namespace App\Http\Livewire\Admin\Playlist;

use Livewire\Component;
use App\Models\Playlist;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Playlists extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $video_ar, $video_en, $video_id, $name_ar, $name_en, $name_id, $is_featured = 0, $selected_id, $term;

    public function mount()
    {
         permation('playlist.view');
    }


    public function delete($id)
    {
         permation('playlist.delete');
        $playlist = Playlist::findOrFail($id);
        if ($playlist->programs()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_programs_first'));
        }
        $playlist->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    // SET PLAYLIST AS FEATURED
    public function setFeatured($featuredCase, Playlist $playlist)
    {
         permation('playlist.feature');
        $playlist->update(['is_featured' => $featuredCase]);
        // REDIRECT TO
        session()->flash('success', __('app.data_updated'));
    }

    public function render()
    {
        $playlists = Playlist::with('programCat', 'programSubCat')->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.playlist.playlists', [
            'playlists' => $playlists,
        ])->layout(ADMIN_LAYOUT);
    }
}
