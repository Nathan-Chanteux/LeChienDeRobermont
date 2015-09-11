<?php

namespace App\Http\Controllers\Users;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UsersController extends Controller {
    
    public function login(Request $request){
        
        //\App\User::create(['name' => 'Chanteux', 'email' => 'nathanchanteux@gmail.com', 'password' => \Illuminate\Support\Facades\Hash::make('root')]);
        Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')]);
        
        //dd(Auth::check());
        return redirect('/admin/article')->with('message', 'Connexion établie.');
    }
    public function logout(){
        \Illuminate\Support\Facades\Auth::logout();
        
        return redirect('/');
    }
}