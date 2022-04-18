<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // sign the user in
        if (!auth()->attempt($request->only(['email', 'password']))) {
            // redirect back
            return redirect()->back()->with('status', 'Invalid credentials');

        }

        return redirect()->route('dashboard');
    }
}