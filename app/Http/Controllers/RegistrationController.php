<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class RegistrationController extends Controller
{
   public function store(){
    	//Validate Form
  $this->validate(request(),[
    'name' => 'required'
    ]);



    $name = request('name');

    if(request('college'))
    $college_id = request('college');
    else
    $college_id = 20;
    	//Create and Save User
    $user = User::create([
        'name'=>$name,
        'college_id'=>$college_id,
        ]);

    	//Sign in user
    auth()->login($user);
    return redirect('/');
}

}
