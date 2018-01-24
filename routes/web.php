<?php
use Carbon\Carbon;

Route::get('/', function () {
	return view('app.index');
});

Route::get('/testradio', function () {
	return view('testradio');
});

Route::get('/main', function () {
	return view('app.main');
});

Route::get('/apiChat','ChatController@getChat');

Route::post('/chat','ChatController@store');
Route::get('/chat', 'ChatController@getChat');

// Route::get('/chat',function(){
// 		$chats = App\Chat::leftJoin('users','users.id','=','chats.user_id')
// 		->addSelect('name','message','chats.created_at as created_at','chats.updated_at as updated_at')
// 		->orderBy('created_at', 'asc')
// 		->take(40)->get();

// 	return $chats;
// });

Route::get('/index',function(){
	$html='<section class="section index" style="">
	<div class="container">
	<script>startTime();</script>
		<h1 class="title" id="clock-time">
		</h1>
		<h2 class="subtitle" id="clock-date">
		</h2>
	</div>
</section>';
return $html;
});

Route::get('/signup',function(){
	$html='
	<section class="section dedication is-centered">
	<form action="/register" method="POST">
		<div class="field">
			<label class="label">Name</label>
			<div class="control">
				<input class="input" name="name" id="name" type="text" placeholder="Text input">
			</div>
		</div>

		<div class="field">
			<div class="control">
				<label class="checkbox">
					<input type="checkbox">
					I agree to the <a href="#">terms and conditions</a>
				</label>
			</div>
		</div>

		<div class="control">
		<input type="submit" value="Submit" class="button is-primary">
		</div>
	</form>
</section>';
return $html;
});

Route::get('/schedule',function(){
	$html='<section class="section schedule" style="">
	<div class="container">
		<script>startTime();</script>
		<h1 class="title" id="clock-time">
		</h1>
		<h2 class="subtitle" id="clock-date">
		</h2>
		<table>
			<tr>
				<th style="width:50%">Time</th>
				<th>Genre</th>
			</tr>
			<tr>
				<td>8:00 - 10:00</td>
				<td>Rock</td>
			</tr>
			<tr>
				<td>10:00- 12:00</td>
				<td>Punk</td>
			</tr>
			<tr>
				<td>12:00 - 2:00</td>
				<td>Jazz</td>
			</tr>
			<tr>
				<td>2:00 - 3:00</td>
				<td>Nursery Rhymes</td>
			</tr>
			<tr>
				<td>3:00 - 4:00</td>
				<td>Classics</td>
			</tr>
			<tr>
				<td>4:00 - 5:00</td>
				<td>Rock</td>
			</tr>
		</table>
	</div>
</section>';
return $html;
});

Route::get('/dedication',function(){
	$html = '
	<section class="section dedication is-centered">
		<div class="container" style="padding-bottom: 150px">
			<div class="msg-group center" id="chatbox">
				
			</div>

			<div class="input-group">
				<div class="field">
					<div class="control">
						<input class="input" type="text" placeholder="Text iput" id="message" style="width: 90%">
						<button class="btn btn-secondary" id="send" onclick="send()" style="width: 7%">Send</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	';
	return $html;
});


Route::get('/deds', function(){
	return view('app.dedication'); 
});

Route::get('/test',function(){
	return view('app.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// Route::get('/getChat', function(){
//  if(Request::ajax()){
//  	return 'alright';
//  }
// });
// Route::get('/logins', function () {
// 	return view('app.login');
// });
// Route::get('/login', '	SessionsController@create');