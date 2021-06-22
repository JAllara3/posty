<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    //create an index method to return a view
    public function index()
    {
        return view('auth.register');
    }

    //create a users store method
    public function store(Request $request)
    {
        //validate user creation
        $this->validate($request,[
            'name' => 'required|max:255',
            'username' => 'required',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        //store user
        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //sign the user in

        //redirect
        return redirect()->route('dashboard');

        
    }
}
