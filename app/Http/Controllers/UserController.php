<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function home()
    {
        if (Auth::check()) {
            return view('home');
        }else {
            
            return redirect('/');
        }
        return view('/');
    }
    public function loadLogin()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('login');
    }
    public function loadRegister()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('register');
    }

    public function userRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()
            ->back()
            ->with('message', 'Registration has been succesfully');
    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $userCredential = $request->only('email','password');

        if (Auth::attempt($userCredential)) {
            return redirect('/home');
        }else {
            return redirect()
            ->back()
            ->with('error', 'User credential are not match');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flash();
        Auth::logout();
        return redirect('/');
    }
}
