<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\College;
use Auth;

class SessionsController extends Controller
{
	public function main()
	{
		$colleges = College::get();
		return view('app.main',compact('colleges'));
	}

	public function create(){

	}
}



