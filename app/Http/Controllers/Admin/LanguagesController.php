<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LanguagesController extends Controller
{
   // CHANGE LOCALE
   public function languages($lang)
   {
        Session()->put('locale', $lang);
       // REDIRECT TO
       return back();
   }
}
