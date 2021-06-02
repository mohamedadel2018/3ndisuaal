<?php

namespace App\Http\Livewire\Frontend\Question;

use Livewire\Component;
use App\Models\Question;

class Answer extends Component
{
    public $question_code;
    public $questionAnswer;
    public $theQuestion;

    public function answer()
    {
        $this->validate([
            'question_code' => 'required|string|exists:questions,code',
        ],messages());
        session()->flash('success', __('app.code_is_correct'));
        $question = Question::where('code', $this->question_code)->first();
        $this->theQuestion = $question->question;
        $this->questionAnswer = $question->answer;

    }

    public function render()
    {
        return view('livewire.frontend.question.answer');
    }
}
