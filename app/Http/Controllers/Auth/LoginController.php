<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }


    // JIKA YANG LOGIN ADALAH TAMU MAKA TENDANG KE ROUTE /CREATE.
    public function authenticated()
    {
        if (auth()->user()->role_id === 4) {
            return redirect()->route('create');
        }

        return redirect('/');
    }
}
