<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Newss extends Component
{


    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;


    public function mount()
    {
        permation('new.view');
    }

    public function delete($id)
    {
        permation('new.delete');
        $news = News::findOrFail($id);

        $news->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $newss = News::select(['id', 'title_ar', 'title_en', 'title_id'])->where('title_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.news.newss', [
            'newss' => $newss,
        ])->layout(ADMIN_LAYOUT);
    }
}
