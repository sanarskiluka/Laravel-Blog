<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller {
    public function login() {
        return view('sessions.login');
    }

    public function auth() {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)) {
            session()->regenerate();

            $user = auth()->user();
            // dd($user->name);
            return redirect('/')->with('success', 'Welcome Back, ' . $user->name);
        }

        return back()
            ->withInput()
            ->withErrors(['email' => "Your provided credentials was not verified."])
            ->with('unsuccess', 'Incorrect email or password');

        // throw ValidationException::withMessages([
        //     'email' => "Your provided credentials was not verified."
        // ]);
    }

    public function destroy() {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
