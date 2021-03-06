@extends ('approving.approvinglayout')


@section('content')
<div class="content mt-4">
   <div class="animated fadeIn">


         <div class="col-lg-12">

 <ul class="nav nav-pills ">
<li><a href="/approval" style="font-weight: bold;padding:10px;">All</a></li>
<li><a href="/leavependingapproval" style="font-weight: bold;padding:10px;">Pending</a></li>
<li><a href="/leaveapproved" style="font-weight: bold;padding:10px;">Recommended</a></li>
<li><a href="/leaverejected" style="font-weight: bold;padding:10px;">Reverted Back</a></li>

</ul>



<div class="card">

<div class="container-fluid">
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
</div>
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
