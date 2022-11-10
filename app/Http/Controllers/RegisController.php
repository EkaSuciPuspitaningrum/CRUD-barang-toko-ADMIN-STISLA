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

    public function perform(Request $request){
        $request->validate([
            'email' => 'required|email:rfc,dns|unique:users,email',
            'id_admin' => 'required|unique:users,id_admin',
            'name' => 'required|min:3',
            'password' => 'required|min:8',
        ],[
            'email.required' => 'Email tidak boleh kosong!',
            'id_admin.required' => 'Nomor Id tidak boleh kosong!',
            'name.required' => 'Nama tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!',
            
        ]);
        
        $user = new User;
        $user->id_admin= $request-> input('id_admin');
        $user->name = $request-> input('name');
        $user->email = $request-> input('email');
        $user->password = $request-> input('password');
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect('/')->with('success', "Account successfully registered.");
    }
}
