<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisController extends Controller
{
    public function show(){
        return view('auth.regis');
    }

    public function perform(RegisterRequest $request){
        
        $user = User::create($request->validated());

        $user->id_name = $request-> input('id_name');
        $user->name = $request-> input('name');
        $user->email = $request-> input('email');
        $user->password = $request-> input('password');
        $user->password = Hash::make($request->password);

        $user->save();
        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
