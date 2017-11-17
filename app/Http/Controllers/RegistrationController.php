<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class RegistrationController extends Controller
{
    public function create(){
       return view('sessions.create');
   }

   public function store(){
    	//Validate Form
//$mac = substr (exec('getmac') , 0 , 17 ); //extract user mac address

    	//Create and Save User
    $user = User::create([
        'name'=>request('name')
        ]);
    	//Sign in user
    auth()->login($user);
    return redirect('/');
}

}
