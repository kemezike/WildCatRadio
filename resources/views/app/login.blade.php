<!DOCTYPE html>
<html>
<head>
	<title>WildCats Radio</title>
	<link rel="stylesheet" href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/bulma.css')}}">
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('css/custom-fonts.css')}}">
	<style>
		html{
			background-color: #E2F5FE;
		}
	</style>
</head>
<body>

	<div class="container">

		<section class="section dedication is-centered">
			<form action="/register" method="POST">
			{{csrf_field()}}
				<div class="field">
					<label class="label">Name</label>
					<div class="control">
						<input class="input" name="name" type="text" placeholder="Text input">
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
					<button class="button is-primary">Submit</button>
				</div>
			</form>
		</section>
	</div>

</body>
</html>