@extends ('layouts.layout')


@section('content')

<div class="sidenav">
  <a href="#" style="text-align: center;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbTzYAUrDCsawDGrujPE8i_3i6YQYOBySJCH0xr0rIyBEz2OVZgg" alt="user Image" height="200px" width="150/px" />
  </a>
  <a href="#">User Name</a>
  <a href="#"><i class="fa fa-cog"></i>Profile Update</a>
  <a href="#"><i class="fa fa-refresh"></i>Search Info</a>
  
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
<a href="/approved/{{$user_details->ID}}" class="btn btn-success status" role="button">Approve</a>
<a href="/rejected/{{$user_details->ID}}" class="btn btn-success status" role="button">Reject</a>
</div></div>
<script>
  $(document).ready(function(){
    var status = "<?php echo $user_details->status ?>";
    // alert(status);
    if(status != 'Recommended')
    {
      $('.status').bind('click', false).css({"background-color": "grey", "cursor": "default", "border-color":"grey"});
    }
  });
</script>
@endsection
