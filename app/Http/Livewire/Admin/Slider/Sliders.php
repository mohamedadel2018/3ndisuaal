<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Sliders extends Component
{

    use WithPagination, WithFileUploads;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;

    public function mount()
    {
        permation('slider.view');
    }

    public function delete($id)
    {
         permation('slider.delete');
        $slider = Slider::findOrFail($id);
        deleteFile($slider, 'default');
        deleteFile($slider, 'file');
        $slider->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $sliders = Slider::with('images')->select([
            'id',             'video_ar',
            'video_en',
            'video_id', 'is_video'
        ])->where('video_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.slider.sliders', [
            'sliders' => $sliders,
        ])->layout(ADMIN_LAYOUT);
    }
}
