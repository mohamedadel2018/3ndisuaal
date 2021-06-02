<?php

namespace App\Http\Livewire\Admin\Question;

use Livewire\Component;
use App\Models\Question;
use Livewire\WithPagination;

class Questions extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;

    public function mount()
    {
         permation('question.view');
    }

    public function delete($id)
    {
         permation('question.delete');
        $question = Question::findOrFail($id);

        $question->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $questions = Question::with('encyclopediaCat', 'encyclopediaSubCat')->select(['id', 'encyclopedia_cat_id', 'encyclopedia_sub_cat_id', 'question'])->where('question', 'LIKE', '%' . trim($this->term) . '%')->where('is_read',1)->latest()->paginate(PGA);
        return view('livewire.admin.question.questions', [
            'questions' => $questions,
        ])->layout(ADMIN_LAYOUT);
    }

}
