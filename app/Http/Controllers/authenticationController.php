<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class authenticationController extends Controller
{
    public function index() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function addUser(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required | max:40 ',
            'username' => 'required | max:20',
            'password' => 'required | min:5',
            'email' => 'required | email | unique:users',
            'image' => 'file | mimes:png,jpg,jpeg',
        ]);

        $image = null;
        if($request->file('image')) {
            $image = $request->file('image')->store('image', 'public');
        }

        User::create([
            'name' => $request->username,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'image' => $image,
    ]);

        return redirect('/login')->with('success', 'User registered successfully');
    }

    public function authenticateUser(Request $request) {
        $validatedData = $request->only('username', 'password');

        if(Auth::attempt($validatedData)) {
            if (Auth::user()->as == 'admin') {
                return redirect('/dashboard/home')->with('success', "Hi ".Auth::user()->name);      
            } else if ( Auth::user()->as == 'user' ) {
                return redirect('/')->with('success', 'Successfully Loged-in');
            }  
        }

        return redirect()->back()->withErrors([
            'email' => 'These credentials doesnt match our record.',
        ]);
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
