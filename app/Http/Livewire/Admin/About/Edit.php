<?php

namespace App\Http\Livewire\Admin\About;

use App\Models\About;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{
    public $about;
    public $about_ar;
    public $about_en;
    public $about_id;
    public $our_vision_ar;
    public $our_vision_en;
    public $our_vision_id;
    public $our_goals_ar;
    public $our_goals_en;
    public $our_goals_id;
    public $meta_title_ar;
    public $meta_title_en;
    public $meta_title_id;
    public $meta_descrption_ar;
    public $meta_descrption_en;
    public $meta_descrption_id;
    public $selected_id;

    public function mount(About $about)
    {
         permation('about.edit');
        $this->about = $about;
        $this->selected_id = $about->id;
        $this->about_ar = $about->about_ar;
        $this->about_en = $about->about_en;
        $this->about_id = $about->about_id;
        $this->our_vision_ar = $about->our_vision_ar;
        $this->our_vision_en = $about->our_vision_en;
        $this->our_vision_id = $about->our_vision_id;
        $this->our_goals_ar = $about->our_goals_ar;
        $this->our_goals_en = $about->our_goals_en;
        $this->our_goals_id = $about->our_goals_id;
        $this->meta_title_ar = $about->meta_title_ar;
        $this->meta_title_en = $about->meta_title_en;
        $this->meta_title_id = $about->meta_title_id;
        $this->meta_descrption_ar = $about->meta_descrption_ar;
        $this->meta_descrption_en = $about->meta_descrption_en;
        $this->meta_descrption_id = $about->meta_descrption_id;
    }

    public function update()
    {
        permation('about.edit');
        $this->validate([
            'about_ar' => 'required|min:1|string',
            'about_en' => 'required|min:1|string',
            'about_id' => 'required|min:1|string',
            'our_vision_ar' => 'required|min:1|string',
            'our_vision_en' => 'required|min:1|string',
            'our_vision_id' => 'required|min:1|string',
            'our_goals_ar' => 'required|min:1|string',
            'our_goals_en' => 'required|min:1|string',
            'our_goals_id' => 'required|min:1|string',
            'meta_title_ar' => 'required|min:1|string',
            'meta_title_en' => 'required|min:1|string',
            'meta_title_id' => 'required|min:1|string',
            'meta_descrption_ar' => 'required|min:1|string',
            'meta_descrption_en' => 'required|min:1|string',
            'meta_descrption_id' => 'required|min:1|string',
        ], messages());
        $about = About::findOrFail($this->selected_id);
        $about->update([
            'about_ar' => $this->about_ar,
            'about_en' => $this->about_en,
            'about_id' => $this->about_id,
            'our_vision_ar' => $this->our_vision_ar,
            'our_vision_en' => $this->our_vision_en,
            'our_vision_id' => $this->our_vision_id,
            'our_goals_ar' => $this->our_goals_ar,
            'our_goals_en' => $this->our_goals_en,
            'our_goals_id' => $this->our_goals_id,
            'meta_title_ar' => $this->meta_title_ar,
            'meta_title_en' => $this->meta_title_en,
            'meta_title_id' => $this->meta_title_id,
            'meta_descrption_ar' => $this->meta_descrption_ar,
            'meta_descrption_en' => $this->meta_descrption_en,
            'meta_descrption_id' => $this->meta_descrption_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.about.index');
    }

    public function render()
    {
        return view('livewire.admin.about.edit')->layout(ADMIN_LAYOUT);
    }
}
