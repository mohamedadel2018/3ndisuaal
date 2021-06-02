<?php

namespace App\Http\Livewire\Admin\Social;

use App\Models\Social as SocialModel;
use Livewire\Component;

class Social extends Component
{


    public $social;
    public function mount(SocialModel $social)
    {
         permation('social.view');
        $this->social = $social;
    }
    public function render()
    {
        return view('livewire.admin.social.social')->layout(ADMIN_LAYOUT);
    }

}
