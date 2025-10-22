<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(Request $request){
        // validate
        $attributes = $request->validate([
            'password' => ['required',password::min(6),'confirmed'], // password_confirmation
            'email' => ['required', 'email', 'max:254'],
            'name' => ['required', 'min:3'],
        ]);

        // create User
        $user = User::Create($attributes);

        // log In
        Auth::login($user);

        // redirect somewhere
        return redirect('/jobs');
    }
}
