@extends('layouts.layout')

@section('content')
<br><br>
	<form action="/odform" method="POST">
			{{ csrf_field() }}
				<label for="start_date">Start Date (of leave)</label><br>
				<input type="date" id="start_date" name="start_date" required>
				<br><br>
				<label for="end_date">End date</label><br>
				<input type="date" id="end_date" name="end_date" required>
				<br><br>
				<label for="Leave_info">Leave information</label><br>
				<input type="text" id="Leave_info" name="Leave_info" required>
				<br><br>
				<label for="contact">Contact No (During leave)</label><br>
				<input type="text" id="contact" name="contact" required>
				<br><br>
				<label for="conference">To attend: </label>
          <input type="radio" name="conference" value="National_intl_conference" required>National/Int. National conferenceswithin India/Abroad to present paper with institute financial assistance<br>
          <input type="radio" name="conference" value="Serve_on_committees">Serve on committees/evaluation of specific academic research activities at the instance of MHRD/AICTE with/without institute finance <br>
          <input type="radio" name="conference" value="AICTE_meetings">Meetings of AICTE without institute finance

          <br><br>
          <label for="pdf_file">Upload conference information: </label><br>
				<input type="File" id="pdf_file" name="pdf_file" required>
				<br><br>

				<label for="recommending">Recommending Authority</label><br>
				<input type="text" id="recommending" name="recommending" required>
				<br><br>
				<label for="approving">Approving Authority</label><br>
				<input type="text" id="approving" name="approving" required>
				<br><br>
				<button type="submit" class="btn btn-primary">Submit</button>
				@include('errors.errors')
		</form>
@endsection