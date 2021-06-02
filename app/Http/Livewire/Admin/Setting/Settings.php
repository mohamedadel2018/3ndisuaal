<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Settings extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;

    public function mount()
    {
        permation('setting.view');
    }


    public function delete($id)
    {
        permation('setting.delete');
        $setting = Setting::findOrFail($id);
        $setting->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $settings = Setting::where('id','>',1)->where('meta_title_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.setting.settings', [
            'settings' => $settings,
        ])->layout(ADMIN_LAYOUT);
    }



}
