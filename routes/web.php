<?php

Route::get('/', function () {
	// dd(auth::user());
	//$mac = substr (exec('getmac') , 0 , 17 ); //extract user mac address
	
	//checks if user mac address is in the user table
	// if(App\User::all('mac_address')->contains('mac_address',$mac)){
	// auth()->login($user);
	// $user = App\User::where('mac_address',$mac)->first();
	
	if (auth::user()) {
		return view('app.index');
	}
	else{
		return view('app.login');
	}
});

Route::get('/index',function(){
	$html='<section class="section index" style="">
	<div class="container">
		<h1 class="title">
			1:50 pm
		</h1>
		<h2 class="subtitle">
			Friday, October 3, 2017
		</h2>
	</div>
</section>';
return $html;
});

Route::get('/schedule',function(){
	$html='<section class="section schedule" style="">
	<div class="container">
		<h1 class="title">
			1:50 pm
		</h1>
		<h2 class="subtitle">
			Friday, October 3, 2017
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
	$html = '<section class="section dedication" style="">
	dedication page
</section>';
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
Route::get('/login', function () {
	return view('app.login');
});
// Route::get('/login', '	SessionsController@create');