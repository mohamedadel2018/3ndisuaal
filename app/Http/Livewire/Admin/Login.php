<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public $username,$password;


    public function mount()
    {
        if (Auth::check()) {
            // REDIRECT TO
            return redirect()->route('admin.dashboard');
        }
    }

    public function login()
    {
        $this->validate([
            'username' => 'required|min:1|max:150|string',
            'password' => 'required|min:1|max:150|string',
        ]);

        if (Auth::attempt([
            'username' => $this->username,
            'password' => $this->password,
        ])) {
            // REDIRECT TO
            return redirect()->route('admin.dashboard');
        }
        $this->addError('username', 'Username Or Password Invlaid');
        // return Session::flash('success','Username Or Password Invalid');
    }
    public function render()
    {

        return view('livewire.admin.login')->layout(ADMIN_LOGIN_LAYOUT);
    }
}
