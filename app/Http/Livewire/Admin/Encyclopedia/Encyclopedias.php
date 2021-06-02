<?php

namespace App\Http\Livewire\Admin\Encyclopedia;

use Livewire\Component;
use App\Models\Encyclopedia;
use Livewire\WithPagination;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;
use Illuminate\Support\Facades\Auth;

class Encyclopedias extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $encyclopedia_cat_id, $encyclopedia_sub_cat_id, $question_ar, $question_en, $question_id, $answer_ar, $answer_en, $answer_id, $selected_id, $term, $meta_description_ar, $meta_description_en, $meta_description_id;
    public $encyclopediaSubCats = null;
    public $selectedState = NULL;
    public $selected_sub_category_name = NULL;

    public function mount()
    {
         permation('encyclopedia.view');
        $this->encyclopediaSubCats = collect();
    }


    public function delete($id)
    {
         permation('encyclopedia.delete');
        $encyclopedia = Encyclopedia::findOrFail($id);
        deleteFile($encyclopedia, 'default');
        $encyclopedia->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $encyclopediaCats = EncyclopediaCat::all();
        $encyclopedias = Encyclopedia::with('encyclopediaCat', 'encyclopediaSubCat')->select(['id', 'question_ar', 'question_en', 'question_id', 'encyclopedia_cat_id', 'encyclopedia_sub_cat_id'])->where('question_' . app()->getLocale(), 'LIKE', '%' . trim($this->term) . '%')->latest()->paginate(PGA);
        return view('livewire.admin.encyclopedia.encyclopedias', [
            'encyclopedias' => $encyclopedias,
            'encyclopediaCats' => $encyclopediaCats,
        ])->layout(ADMIN_LAYOUT);
    }
}
