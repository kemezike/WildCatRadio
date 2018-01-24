<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class SessionsController extends Controller
{
	public function main()
	{
		return view('app.main');
	}

	public function create(){

	}
}



