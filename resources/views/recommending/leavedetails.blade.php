@extends ('layouts.layout')

@section('nav')
<br>
<link href="/css/nav.css" rel="stylesheet">	

<header role="banner">
			<nav class="navbar">
			<div class="container">
  				<ul class="nav">
    					<li><a href="/recommend">All</a></li>
    					<li><a href="/leavepending">Pending</a></li>
    					<li><a href="/leaverecommended">Recommended</a></li>
    					<li><a href="/leavereverted">Reverted Back</a></li>
  				</ul>
			</div>
			</nav>
</header>
<br>
@endsection

@section('content')
<div class="sidenav">
  <a href="#" style="text-align: center;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbTzYAUrDCsawDGrujPE8i_3i6YQYOBySJCH0xr0rIyBEz2OVZgg" alt="user Image" height="200px" width="150/px" />
  </a>
  <a href="#">User Name</a>
  <a href="#"><i class="fa fa-cog"></i>Profile Update</a>
  <a href="/clform"><i class="fa fa-user"></i>Apply for Leave</a>
  <a href="#"><i class="fa fa-shopping-cart"></i>Check Leave Balance</a>
  <a href="#"><i class="fa fa-refresh"></i>Leave History</a>
  
  <a href="/logout"><i class="fa fa-sign-out"></i>Logout</a>
  </div>

<div class="sidenavright">

  </div>
  
<div class="wrapper">
<div class="post-list">
<h2>{{ $user_details->name }}</h2>
<h5><b>Employee ID</b> : {{ $user_details->emp_id }}</h5>
<br>
<p><h5><b>Purpose of Leave: </b></h5>{{ $user_details->purpose }}</p>
<p><h5><b>Start Date of Leave: </b></h5> {{ $user_details->start_date }} </p>
<p><h5><b>Number of Days of Leave: </b></h5> {{ $user_details->no_of_days }}</p>
<p><h5><b>Contact (During Leave): </b></h5> {{ $user_details->contact }} </p>
<br>
<a href="/recommended/{{$user_details->ID}}" class="btn btn-success status" role="button">Recommend</a>
<a href="/reverted/{{$user_details->ID}}" class="btn btn-success status" role="button">Revert Back</a>
</div></div>
<script>
	$(document).ready(function(){
		var status = "<?php echo $user_details->status ?>";
		// alert(status);
		if(status != 'Application submitted')
		{
			$('.status').bind('click', false).css({"background-color": "grey", "cursor": "default", "border-color":"grey"});
		}
	});
</script>
@endsection
