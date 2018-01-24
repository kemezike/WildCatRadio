<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Chat;
use Carbon\Carbon;
use Auth;

class ChatController extends Controller
{

	public function store(Request $request){
// validate user
		Chat::create([
			'user_id'=>Auth::user()->id,
			'message'=>$request->message,
			]);

		return Auth::user()->id;
	}

	public function getChat(){
		$chats = Chat::leftJoin('users','users.id','=','chats.user_id')
		->addSelect('name','message','chats.created_at as created_at','chats.updated_at as updated_at')
		->orderBy('created_at', 'desc')
		->take(10)->get();

		return $chats;
	}
}
