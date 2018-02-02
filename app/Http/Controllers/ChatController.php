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



//create chat and save
		Chat::create([
			'user_id'=>Auth::user()->id,
			'message'=>$request->message,
			]);

		return Auth::user()->id;
	}

	public function getChat(){
		$chats = Chat::leftJoin('users','users.id','=','chats.user_id')
		->addSelect('chats.id as chat_id','users.id as user_id','name','message','users.college_id as college_id',
			'chats.created_at as created_at','chats.updated_at as updated_at')
		->orderBy('chat_id', 'desc')
		->take(10)->get();

		return $chats;
	}
}
