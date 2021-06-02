<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Encyclopedia;
use Illuminate\Http\Request;
use App\Models\EncyclopediaSubCat;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    // GET ENCYCLOPEDIA SUB CATS
    public function getEncyclopediaSubCats($encyclopediaCatId)
    {
        $encyclopediaSubCats  = EncyclopediaSubCat::where('encyclopedia_cat_id', $encyclopediaCatId)->get();
        // return 'kOLO BEFADEL ALLAH WA7DDO';
        $name = "name";
        $response = [];
        foreach ($encyclopediaSubCats as $encyclopediaSC) {
            $response[] = ["id" => $encyclopediaSC->id, "text" => $encyclopediaSC->translate($name)];
        }
        return response()
            ->json($response);
    }

    // GET MATCHED QUESTION IN ASK QUESTION IN THE HOME PAGE
    public function getMatchedQuestions($question)
    {
        $output ='';
        $output .= '<ul class="mt-2 mr-1">';
        $encyclopedias =  Encyclopedia::where('question_'. app()->getLocale(),'LIKE', '%'. trim($question) . '%');
        if ($encyclopedias->count() > 0) {
            foreach ($encyclopedias->take(10)->get() as $encyclopedia) {
                $output .= '<li class=" p-2"><a href="'.route('encyclopedia',[$encyclopedia->id, $encyclopedia->translate('slug')]).'" class="bg-gray-100 p-2 block">' . $encyclopedia->translate('question') . '</a></li>';
            }
        }else {
            $output .= '<li class="p-3"><a href="javascript:void(0);" class="bg-gray-100 block">'.__('app.question_not_exists').'</a></li>';
        }
        $output .= '</ul>';
        return response()->json(['output' => $output], 200);
    }
}
