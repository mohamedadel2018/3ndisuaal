<?php

namespace App\Http\Livewire\Admin\Read;

use App\Models\Read;
use Livewire\Component;
use Livewire\WithPagination;

class Readarchive extends Component
{

    use WithPagination;
    public $read_cat_id;
    public $read_sub_cat_id;
    public $country_id;
    public $level_id;
    public $program_id;
    public $name;
    public $phone;
    public $email;
    public $id_number;
    public $type;
    public $good_time;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];

    public function mount()
    {
        permation('read.view');
    }



    public function delete($id)
    {
        permation('read.delete');
        $read = Read::findOrFail($id);
        $read->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $reads = Read::with('readCat', 'readSubCat', 'country', 'program')->select(['id', 'read_cat_id', 'read_sub_cat_id', 'country_id', 'program_id', 'name', 'phone', 'is_archived'])->where('is_archived', 2)->latest()->paginate(PGA);
        return view('livewire.admin.read.readarchive', [
            'reads' => $reads,
        ])->layout(ADMIN_LAYOUT);
    }

}
