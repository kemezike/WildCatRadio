<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Chat;
Use App\College;
use Carbon\Carbon;
use Auth;

class ChatController extends Controller
{

	public function store(Request $request){
// validate user
		$this->validate(request(),[
			'message' => 'required',
			'song_name'=>'required'
			]);


		if (Auth::user()) {
			$user_id=Auth::user()->id;
		}
		else{
			$user_id=null;
		}

//create chat and save
		Chat::create([
			'user_id'=>$user_id,
			'message'=>$request->message,
			'song_name'=>$request->song_name,
			]);

		return $user_id;
	}

	public function getChat(){
		$chats = Chat::leftJoin('users','users.id','=','chats.user_id')
		->leftJoin('colleges','colleges.id','=','users.college_id')
		->addSelect('chats.id as chat_id','users.id as user_id','users.name as name','message','colleges.name as college_name','song_name',
			'chats.created_at as created_at','chats.updated_at as updated_at')
		->orderBy('chat_id', 'desc')
		->get();

		return $chats;
	}

		public function destroy(Request $request){
			Chat::destroy($request->id);

		return $request->id;
	}
}
