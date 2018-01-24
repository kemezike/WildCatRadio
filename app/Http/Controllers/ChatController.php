<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Chat;
use Carbon\Carbon;

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

	public function getChat(){
		$chats = Chat::leftJoin('users','users.id','=','chats.user_id')
		->addSelect('name','message','chats.created_at as created_at','chats.updated_at as updated_at')
		->orderBy('created_at', 'desc')
		->take(5)->get();

		return $chats;
	}
}
