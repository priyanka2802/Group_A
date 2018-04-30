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
<hr>
@foreach($user_details as $user_details)
<div class="hey">
    <section class="post-item">
        <header class="post-item-header">
           <p class="post-item-meta">
             <span class="post-item-date">Leave start date: {{$user_details->start_date}}</span>
            </p>
            <h2 class="post-item-title">BY - {{$user_details->emp_id}} - {{$user_details->name}}</h2>
        </header>

        <div class="post-item-description">
            <p>
                Purpose Of Leave - {{$user_details->purpose}}
            </p>
        </div>

      <footer class="post-item-footer">
        <a class="post-item-more" href="/approval/{{$user_details->ID}}">Read Full Details</a>
      </footer>
    </section>
</div>
<hr>
@endforeach
    </div>
</div>
</div>
@endsection
