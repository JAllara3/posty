<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    //showing form
    public function index()
    {
        //show a login form page
        return view('auth.login');
    }

    //storing and signing in the user
    public function store(Request $request)
    {
        //validate user credentials
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //authenicate user login with valid login
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)){
            return back()->with('status', 'Invalid login credentials');
        };

        return redirect()->route('dashboard');
    }
}
