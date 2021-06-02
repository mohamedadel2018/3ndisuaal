<?php

namespace App\Http\Livewire\Admin\About;

use App\Models\About;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
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

    public function mount()
    {
         permation('about.create');
    }

    public function store()
    {
        permation('about.create');
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
        About::create([
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
        session()->flash('success', __('app.data_saved'));
       // REDIRECT TO
       return redirect()->route('admin.about.index');
    }
    public function render()
    {
        return view('livewire.admin.about.create')->layout(ADMIN_LAYOUT);
    }
}
