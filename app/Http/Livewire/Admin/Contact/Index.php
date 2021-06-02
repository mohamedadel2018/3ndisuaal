<?php

namespace App\Http\Livewire\Admin\Contact;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $name;
    public $email;
    public $message;
    public $isRead;

    public function mount()
    {
         permation('contact.view');
    }
    public function delete($id)
    {
         permation('contact.delete');
        $contact = Contact::findOrFail($id);

        $contact->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $contacts = Contact::latest()->paginate(PGA);
        return view('livewire.admin.contact.index', [
            'contacts' => $contacts,
        ])->layout(ADMIN_LAYOUT);
    }

}
