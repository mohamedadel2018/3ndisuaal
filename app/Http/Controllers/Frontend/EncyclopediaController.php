<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\QuestionRequest;

class EncyclopediaController extends Controller
{
    // QUESTION STORE
    public function questionStore(QuestionRequest $request)
    {
       $question = Question::create([
            'encyclopedia_cat_id' => $request->encyclopedia_cat_id,
            'encyclopedia_sub_cat_id' => $request->encyclopedia_sub_cat_id,
            'email' => $request->question_email,
            'question' => $request->question,
            'code' => rand(),
        ]);
        return [
            'question_sucess' => __('app.question_saved'),
            'question_code' => $question->code,
        ];
    }
}
