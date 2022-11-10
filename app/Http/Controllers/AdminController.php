<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function perform(Request $request){

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            $email = $request->input('email');
            $user = User::where('email', $email)->first();
            session()->put('name',$user->name);
            return redirect('/dashboard');
        }else{
            session()->flash('error', 'Email atau Password Salah');
            return redirect()->back();
        }
    }

    public function out()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }
}

