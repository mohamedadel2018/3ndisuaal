<?php

namespace App\Http\Livewire\Admin\Slider;

use Livewire\Component;
use App\Models\Slider as SliderModel;

class Slider extends Component
{

    public $slider;
    public function mount(SliderModel $slider)
    {
        permation('slider.view');
        $this->slider = $slider;
    }
    public function render()
    {
        return view('livewire.admin.slider.slider')->layout(ADMIN_LAYOUT);
    }
}
