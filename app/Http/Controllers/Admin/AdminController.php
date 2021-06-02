<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function logout()
    {
        Auth::logout();
        // REDIRECT TO
        return redirect()->route('admin.login');
    }
}
