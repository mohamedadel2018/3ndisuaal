<?php

namespace App\Http\Livewire\Frontend\Question;

use Livewire\Component;
use App\Models\Encyclopedia;
use App\Models\EncyclopediaCat;
use App\Models\EncyclopediaSubCat;
use App\Models\Question as QuestionModel;

class Question extends Component
{
    public $encyclopediaCats;
    public $encyclopediaSubCats = [];
    public $selectedState; // MAIN CATEGORY ID FOR WATCH BY UPDATED HOOKS
    public $encyclopedia_sub_cat_id;
    public $email;
    public $question;
    public $questionSelectedState;
    public $matchedEncyclopediaQuestions;

    public function __construct()
    {
        $this->encyclopediaCats = EncyclopediaCat::all();
        $this->encyclopediaCats = collect();
        $this->matchedEncyclopediaQuestions = collect();
    }

    public function mount()
    {
        $this->encyclopediaCats = EncyclopediaCat::all();
        $this->encyclopediaSubCats = collect();
        $this->matchedEncyclopediaQuestions = collect();
    }

    public function updatedSelectedState($state)
    {
        $this->selectedState = $state;
        $this->encyclopediaSubCats = EncyclopediaSubCat::where('encyclopedia_cat_id', $this->selectedState)->get();
    }
    public function updatedQuestion($state)
    {
        $this->questionSelectedState = $state;
        $this->matchedEncyclopediaQuestions = Encyclopedia::where('question_' . app()->getLocale(), 'LIKE', '%' . trim($this->questionSelectedState) . '%')->take(10)->get();
    }

    public function send()
    {
        $this->validate([
            'selectedState' => ['required', 'exists:encyclopedia_cats,id'],
            'encyclopedia_sub_cat_id' => ['required', 'exists:encyclopedia_sub_cats,id'],
            'question' => ['required', 'string', 'max:300'],
            'email' => ['required', 'string', 'email','max:100'],
        ],messages());

        $question = QuestionModel::create([
            'encyclopedia_cat_id' => $this->selectedState,
            'encyclopedia_sub_cat_id' => $this->encyclopedia_sub_cat_id,
            'email' => $this->email,
            'question' => $this->question,
            'code' => rand(),
        ]);
        $this->resetErrorBag();
        $this->reset();
        $this->encyclopediaCats = EncyclopediaCat::all();
        session()->flash('success', __('app.question_saved'). '( '.$question->code.' )');
        $this->encyclopediaSubCats = collect();
        $this->matchedEncyclopediaQuestions = collect();
    }

    public function render()
    {
        return view('livewire.frontend.question.question');
    }
}
