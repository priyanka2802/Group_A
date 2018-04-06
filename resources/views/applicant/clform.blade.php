@extends('layouts.layout')
@section('content')
<div class="container">
<br><br>
	<form action="/clform" method="POST">
			{{ csrf_field() }}
			@include('errors.errors')
				<label for="start_date">Start Date (of leave)</label><br>
				<input type="date" id="start_date" name="start_date" required>
				<br><br>
				<label for="num_days">Number Of Days(Excluding national holidays)</label><br>
				<input type="number" id="num_days" name="num_days" required>
				<br><br>
				<label for="purpose">Purpose Of Leave</label><br>
				<input type="text" id="purpose" name="purpose" required>
				<br><br>
				<label for="contact">Contact Number (during leave)</label><br>
				<input type="number" id="contact" name="contact" required>
				<br><br>
				<label for="recommending">Recommending Authority</label><br>
				<input type="text" id="recommending" name="recommending" required>
				<br><br>
				<label for="approving">Approving Authority</label><br>
				<input type="text" id="approving" name="approving" required>
				<br><br>
				<button type="submit" class="btn btn-primary">Submit</button>
				
		</form>
</div>
@endsection
