<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{

    use WithFileUploads;
    public $image;
    public $video_ar;
    public $video_en;
    public $video_id;
    public $is_video;


    public function mount()
    {
        permation('slider.create');
    }
    public function store()
    {
        permation('slider.create');
        $this->validate([
            'is_video' => 'required|in:0,1',
            'video_ar' => 'required|min:1|max:150|string|unique:sliders',
            'video_en' => 'required|min:1|max:150|string|unique:sliders',
            'video_id' => 'required|min:1|max:150|string|unique:sliders',
            'image' => 'nullable|image|max:2048|mimes:png,jpg,jpeg',
        ], messages());
        $slider = Slider::create([
            'video_ar' => $this->video_ar,
            'video_en' => $this->video_en,
            'video_id' => $this->video_id,
            'is_video' => $this->is_video,
            'admin_id' => Auth::user()->id,
        ]);

        if ($this->image != null) {
            uploadFile($this->image, $slider, 'default');
            $this->image = null;
        }

        session()->flash('success', __('app.data_saved'));
        $this->reset();
        $this->resetValidation();
        // REDIRECT TO
        return redirect()->route('admin.sliders');
    }


    public function render()
    {
        return view('livewire.admin.slider.create')->layout(ADMIN_LAYOUT);
    }
}
