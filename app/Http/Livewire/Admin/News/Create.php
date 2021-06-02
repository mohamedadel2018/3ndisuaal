<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{
    public $title_ar, $title_en, $title_id, $selected_id;

    public function mount()
    {
         permation('new.create');
    }

    public function store()
    {
        permation('new.create');
        $this->validate([
            'title_ar' => 'required|min:1|string',
            'title_en' => 'required|min:1|string',
            'title_id' => 'required|min:1|string',
        ], messages());
        News::create([
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'title_id' => $this->title_id,
            'admin_id' => Auth::user()->id,
        ]);
        session()->flash('success', __('app.data_saved'));
        $this->reset();
        $this->resetValidation();
        // REDIRECT TO
        return redirect()->route('admin.news');
    }

    public function render()
    {
        return view('livewire.admin.news.create')->layout(ADMIN_LAYOUT);
    }
}
