<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;
use App\Models\Setting as SettingModel;
class Setting extends Component
{
    public $setting;

    public function mount(SettingModel $setting)
    {
        permation('setting.view');
        $this->setting = $setting;
    }
    public function render()
    {
        return view('livewire.admin.setting.setting')->layout(ADMIN_LAYOUT);
    }



}
