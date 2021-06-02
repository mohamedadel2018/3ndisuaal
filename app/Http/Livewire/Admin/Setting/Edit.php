<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{
    public $setting;
    public $meta_title_ar;
    public $meta_title_en;
    public $meta_title_id;
    public $meta_descrption_ar;
    public $meta_descrption_en;
    public $meta_descrption_id;
    public $video_ar;
    public $video_en;
    public $video_id;
    public $home_cover;
    public $selected_id;

    public function mount(Setting $setting)
    {
        permation('setting.edit');
        $this->setting = $setting;
        $this->selected_id = $this->setting->id;
        $this->meta_title_ar = $this->setting->meta_title_ar;
        $this->meta_title_en = $this->setting->meta_title_en;
        $this->meta_title_id = $this->setting->meta_title_id;
        $this->video_ar = $this->setting->video_ar;
        $this->video_en = $this->setting->video_en;
        $this->video_id = $this->setting->video_id;
        $this->meta_descrption_ar = $this->setting->meta_descrption_ar;
        $this->meta_descrption_en = $this->setting->meta_descrption_en;
        $this->meta_descrption_id = $this->setting->meta_descrption_id;
        $this->home_cover = $this->setting->home_cover;
    }

    public function update()
    {
        permation('setting.edit');
        $this->validate([
            'meta_title_ar' => 'required|min:1|string',
            'meta_title_en' => 'required|min:1|string',
            'meta_title_id' => 'required|min:1|string',
            'meta_descrption_ar' => 'required|min:1|string',
            'meta_descrption_en' => 'required|min:1|string',
            'meta_descrption_id' => 'required|min:1|string',
            'video_ar' => 'required|min:1|string',
            'video_en' => 'required|min:1|string',
            'video_id' => 'required|min:1|string',
            'home_cover' => 'required|integer|in:1,2',
        ], messages());
        $setting = Setting::findOrFail($this->selected_id);
        $setting->update([
            'meta_title_ar' => $this->meta_title_ar,
            'meta_title_en' => $this->meta_title_en,
            'meta_title_id' => $this->meta_title_id,
            'video_ar' => $this->video_ar,
            'video_en' => $this->video_en,
            'video_id' => $this->video_id,
            'meta_descrption_ar' => $this->meta_descrption_ar,
            'meta_descrption_en' => $this->meta_descrption_en,
            'meta_descrption_id' => $this->meta_descrption_id,
            'home_cover' => $this->home_cover,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.settings');
    }

    public function render()
    {
        return view('livewire.admin.setting.edit')->layout(ADMIN_LAYOUT);
    }
}
