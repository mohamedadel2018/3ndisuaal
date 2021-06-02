<?php

namespace App\Http\Livewire\Admin\Country;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Countries extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;

    public function mount()
    {
        permation('country.view');
    }

    public function delete($id)
    {
        permation('country.delete');
        $country = Country::findOrFail($id);
        if ($country->reads()->count()) {
            // REDIRECT TO
            return back()->with('info', __('app.delete_reads_first'));
        }
        $country->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $countries = Country::select(['id', 'name_ar', 'name_en', 'name_id'])->where('name_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.country.countries', [
            'countries' => $countries,
        ])->layout(ADMIN_LAYOUT);
    }
}
