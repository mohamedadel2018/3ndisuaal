<?php

namespace App\Http\Livewire\Admin\Question;

use Livewire\Component;
use App\Mail\AnswerMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Question as QuestionModel;

class Question extends Component
{

    public $question;
    public $answer;
    public function mount(QuestionModel $question)
    {
         permation('question.view');
        $this->question = $question;
    }

    // SAVE ANSWER AND SEND IT TO EMAIL
    public function saveAnswer($questionId)
    {
         permation('question.answer');
        $this->validate([
            'answer' => 'required|string',
        ], messages());

        $questionAnswer = QuestionModel::findOrFail($questionId);
        $questionAnswer->update([
            'answer' => $this->answer,
            'is_read' => 2,
        ]);
        // if ($this->question->email != '') {
        //     // SENDING EMAIL
        //     Mail::to($this->question->email)->send(new AnswerMail($questionAnswer));
        // }

        session()->flash('success', __('app.data_saved'));
        // REDIRECT TO
        return redirect()->route('admin.question',[$questionId]);
    }

    public function render()
    {
        return view('livewire.admin.question.question')->layout(ADMIN_LAYOUT);
    }

}
