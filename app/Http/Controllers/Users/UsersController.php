<?php
/*
 * \Http\Controllers\Users\UsersController.php
 */
namespace App\Http\Controllers\Users;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UsersController extends Controller {
/*
 * Demande si l'utilisateur est bien connecter
 * 
 * Redirigue l'utilisateur vers l'admin si il est connecter
 * 
 * Requête : Auth::attempt() => Va vérifier que l'utilisateur a bien enter un login et un mot de passe valide pour se connecter à l'admin
 *      @param: string email, string password
 * 
 * @param: /
 * @return: /
 */     
    public function login(Request $request){
        
        //\App\User::create(['name' => 'Chanteux', 'email' => 'nathanchanteux@gmail.com', 'password' => \Illuminate\Support\Facades\Hash::make('root')]);
        Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')]);
        
        //dd(Auth::check());
        return redirect('/admin/article')->with('message', 'Connexion établie.');
    }
/*
 * Déconnecte l'utilisateur
 * 
 * Requête : Auth::logout => Va vérifier déconnecter l'utilisateur
 *      @param: /
 * 
 * @param: /
 * @return: /
 */ 
    public function logout(){
        \Illuminate\Support\Facades\Auth::logout();
        
        return redirect('/');
    }
}