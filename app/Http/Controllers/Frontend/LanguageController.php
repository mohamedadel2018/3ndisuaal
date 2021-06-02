<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    // CHANGE LOCALE
    public function languages($lang)
    {
        Session()->put('front-locale', $lang);
        // REDIRECT TO
        return back();
    }
}
