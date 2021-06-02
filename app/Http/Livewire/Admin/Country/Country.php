<?php

namespace App\Http\Livewire\Admin\Country;

use App\Models\Country as CountryModel;
use Livewire\Component;

class Country extends Component
{

    public $country;
    public function mount(CountryModel $country)
    {
         permation('country.view');
        $this->country = $country;
    }
    public function render()
    {
        return view('livewire.admin.country.country')->layout(ADMIN_LAYOUT);
    }
}
