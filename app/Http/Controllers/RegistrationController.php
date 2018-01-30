<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class RegistrationController extends Controller
{
    public function create(){
       return view('app.login');
   }

   public function store(){
    	//Validate Form

    if(Auth::user())
       Auth::logout();
     
    	//Create and Save User
    $user = User::create([
        'name'=>request('name')
        ]);
    	//Sign in user
    auth()->login($user);
    return redirect('/main');
}

}
