<?php

namespace App\Http\Livewire\Admin\Question;

use Livewire\Component;
use App\Models\Question;
use Livewire\WithPagination;

class Questionsanswered extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'delete'
    ];
    public $term;



    public function delete($id)
    {
        $question = Question::findOrFail($id);

        $question->delete();
        session()->flash('success', __('app.data_deleted'));
    }

    public function render()
    {
        $questions = Question::with('encyclopediaCat', 'encyclopediaSubCat')->select(['id', 'encyclopedia_cat_id', 'encyclopedia_sub_cat_id', 'question'])->where('question', 'LIKE', '%' . trim($this->term) . '%')->where('is_read', 2)->latest()->paginate(PGA);
        return view('livewire.admin.question.questionsanswered', [
            'questions' => $questions,
        ])->layout(ADMIN_LAYOUT);
    }

}
