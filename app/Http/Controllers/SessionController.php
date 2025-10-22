<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }
    public function store(Request $request){
        $attributed = $request->validate([
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
        ]);
        $success = Auth::attempt($attributed);
        if(!$success){
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $request->session()->regenerate();

        return redirect('/jobs');
    }
    public function destroy(){
        Auth::logout();
        return redirect('/');
    }
}
