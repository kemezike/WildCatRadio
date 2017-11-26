<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<h1>Register</h1>
<form action="/register" method="POST">
	{{csrf_field()}}
	<div class="form-group">
		<label for="name">Name: asdasd </label>
		<input type="text" name="name"> 
	</div>
	<div class="form-group">
		<button type="submit">Sign in</button>
	</div>
</form>
</body>
</html>