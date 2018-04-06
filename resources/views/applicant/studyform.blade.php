@extends('layouts.layout')

@section('content')
<br><br>
	<form action="/studyform" method="POST">
			{{ csrf_field() }}
				<label for="start_date">Start Date (of leave)</label><br>
				<input type="date" id="start_date" name="start_date" required>
				<br><br>
				<label for="num_days">Number Of Months</label><br>
				<input type="number" id="num_months" name="num_months" required>
				<br><br>
				<label for="purpose">Current Qualification</label><br>
				<input type="text" id="curr_qualification" name="curr_qualification" required>
				<br><br>
                <label for="purpose">Study Pursuing</label><br>
				<input type="text" id="study_pursuing" name="study_pursuing" required>
                <br><br>
				<label for="contact">Contact Number (during leave)</label><br>
				<input type="number" id="contact" name="contact" required>
				<br><br>
				<button type="submit" class="btn btn-primary">Submit</button>

				@include('errors.errors')
		</form>
@endsection