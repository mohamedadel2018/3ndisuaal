<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{
    public $title_ar, $title_en, $title_id, $selected_id,$news;


    public function mount($newsId)
    {
         permation('new.edit');
        $this->news = News::findOrFail($newsId);
        $this->selected_id = $this->news->id;
        $this->title_ar = $this->news->title_ar;
        $this->title_en = $this->news->title_en;
        $this->title_id = $this->news->title_id;
    }

    public function update()
    {
        permation('new.edit');
        $this->validate([
            'title_ar' => 'required|min:1|string',
            'title_en' => 'required|min:1|string',
            'title_id' => 'required|min:1|string',
        ], messages());
        $news = News::findOrFail($this->selected_id);
        $news->update([
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'title_id' => $this->title_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_updated'));
        // REDIRECT TO
        return redirect()->route('admin.news');
    }


    public function render()
    {
        return view('livewire.admin.news.edit')->layout(ADMIN_LAYOUT);
    }
}
