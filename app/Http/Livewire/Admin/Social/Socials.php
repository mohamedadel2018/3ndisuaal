<?php

namespace App\Http\Livewire\Admin\Social;

use App\Models\Social;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Socials extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $icon, $link_ar, $link_en, $link_id, $selected_id, $term;
    public $updateMode = false;


    public function mount()
    {
         permation('social.view');
    }


    public function delete($id)
    {
         permation('social.delete');
        $social = Social::findOrFail($id);

        $social->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $socials = Social::select(['id', 'icon','link_ar', 'link_en', 'link_id'])->where('link_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.social.socials', [
            'socials' => $socials,
        ])->layout(ADMIN_LAYOUT);
    }

}
