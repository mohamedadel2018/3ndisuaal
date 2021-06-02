<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class Slideredit extends Component
{

    use WithFileUploads;
    public $slider;
    public $image;
    public $video_ar;
    public $video_en;
    public $video_id;
    public $is_video;
    public $selected_id;
    public $preview_image;

    public function mount(Slider $slider)
    {
         permation('slider.edit');
        $this->slider = $slider;
        $this->selected_id = $slider->id;
        $this->video_ar = $this->slider->video_ar;
        $this->video_en = $this->slider->video_en;
        $this->video_id = $this->slider->video_id;
        $this->is_video = $this->slider->is_video;
        $this->preview_image = getFile($this->slider, 'default');
    }



    public function update()
    {
        permation('slider.edit');
        $this->validate([
            'video_ar' => 'required|min:1|max:200|string',
            'video_en' => 'required|min:1|max:200|string',
            'video_id' => 'required|min:1|max:200|string',
            'is_video' => 'required|in:0,1',
            'image' => 'nullable|image|max:4094|mimes:png,jpg,jpeg',
        ], messages());

        $slider = Slider::findOrFail($this->selected_id);
        $slider->update(
            [
                'is_video' => $this->is_video,
                'video_ar' => $this->video_ar,
                'video_en' => $this->video_en,
                'video_id' => $this->video_id,
                'admin_id' => Auth::user()->id,
            ]
        );

        if ($this->image != null) {
            deleteFile($slider, 'default');
            uploadFile($this->image, $slider, 'default');
            $this->image = null;
        }
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.sliders');
    }

    public function render()
    {
        return view('livewire.admin.slider.slideredit')->layout(ADMIN_LAYOUT);
    }


}
