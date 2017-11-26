<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Chat;

class ChatController extends Controller
{

	public function store(Request $request){

// validate user
      	Chat::create([
			'user_id'=>$request->user_id,
			'message'=>$request->message,
			]);

		return "ok";
		}
	}
