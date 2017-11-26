@extends('app.master')


@section('content')
			<section class="section schedule" style="">
				<div class="container">
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
			</section>
@endsection