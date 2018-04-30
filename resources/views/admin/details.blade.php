@extends ('admin.layoutadmin')


@section('content')

<div class="container-fluid">
<div class="post-list">
<h2>{{ $user_details->name }}</h2>
<h5><b>Employee ID</b> : {{ $user_details->emp_id }}</h5>
<br>
<p><h5><b>Purpose of Leave: </b></h5>{{ $user_details->purpose }}</p>
<p><h5><b>Start Date of Leave: </b></h5> {{ $user_details->start_date }} </p>
<p><h5><b>End Date of Leave: </b></h5> {{ $user_details->end_date }} </p>
<p><h5><b>Number of Days of Leave: </b></h5> {{ $user_details->no_of_days }}</p>
<p><h5><b>Contact (During Leave): </b></h5> {{ $user_details->contact }} </p>
<br>
@endsection
