<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);

        //var_dump($credentials);
        //var_dump($request);die;
        if (Auth::attempt($credentials, $request->has('remember'))) {
            //success
            session()->flash('success', 'Welcome back!');
            return redirect()->route('users.show', [AUth::user()]);
        } else {
            //fail
            session()->flash('danger', 'Sorry, your email and password do not match!');
            return redirect()->back()->withInput();
        }

    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'You successfully logged out!');
        return redirect('login');
    }
}
