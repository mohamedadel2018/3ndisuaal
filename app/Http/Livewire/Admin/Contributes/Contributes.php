<?php

namespace App\Http\Livewire\Admin\Contributes;

use Livewire\Component;
use App\Models\Contribute;
use Livewire\WithPagination;

class Contributes extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $name, $phone, $address, $text, $term;

   public function mount()
   {
        permation('contribute.view');
   }

    public function delete($id)
    {
         permation('contribute.delete');
        $contribute = Contribute::findOrFail($id);

        $contribute->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $contributes = Contribute::select(['id', 'name', 'phone', 'address', 'created_at'])->where('text' , 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.contributes.contributes', [
            'contributes' => $contributes,
        ])->layout(ADMIN_LAYOUT);
    }



}
