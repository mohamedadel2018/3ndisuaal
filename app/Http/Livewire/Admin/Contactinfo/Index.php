<?php

namespace App\Http\Livewire\Admin\Contactinfo;

use Livewire\Component;
use App\Models\ContactInfo;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $email;
    public $phone;

    public function mount()
    {
         permation('contact.info.view');
    }

    public function delete($id)
    {
         permation('contact.info.delete');
        $contactInfo = ContactInfo::findOrFail($id);

        $contactInfo->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $contactInfos = ContactInfo::latest()->paginate(PGA);
        return view('livewire.admin.contactinfo.index', [
            'contactInfos' => $contactInfos,
        ])->layout(ADMIN_LAYOUT);
    }


}
