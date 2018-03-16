@extends ('layouts.layout')


@section('content')
	
	<div class="sidenav">
  <a href="#" style="text-align: center;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbTzYAUrDCsawDGrujPE8i_3i6YQYOBySJCH0xr0rIyBEz2OVZgg" alt="user Image" height="200px" width="150/px"/>
  </a>
  <a href="#">{{ $user_details->name }}</a>
  <a href="#"><i class="fa fa-cog"></i>Profile Update</a>
  <a href="/clform"><i class="fa fa-user"></i>Apply for Leave</a>
  <a href="#"><i class="fa fa-shopping-cart"></i>Check Leave Balance</a>
  <a href="#"><i class="fa fa-refresh"></i>Leave History</a>
  
  <a href="/logout"><i class="fa fa-sign-out"></i>Logout</a>
  </div>

<div class="sidenavright">

  </div>


<div style="margin:20px;padding:10px;text-align:center;color:black">
  <h2>
    Your Profile 
  </h2>
</div>
  <div class="container">
  <ul class="list-group">
    <li class="list-group-item">Name : {{ $user_details->name }}</li>
  <li class="list-group-item">Employee Code : {{ $user_details->emp_id }}</li>
    <li class="list-group-item">Date of Birth : {{ $user_details->dob }}</li>
    <li class="list-group-item">Sex : {{ $user_details->sex }}</li>
  <li class="list-group-item">Discipline : {{ $user_details->discipline }}</li>
    <li class="list-group-item">Address : {{ $user_details->address }}</li>
  <li class="list-group-item">Home Town : {{ $user_details->hometown }}</li>
  <li class="list-group-item">Religion  : {{ $user_details->religion }}</li>
  <li class="list-group-item">Caste  : {{ $user_details->caste }}</li>
  <li class="list-group-item">Contact No.  : {{ $user_details->contact }}</li>
  <li class="list-group-item">Marital Status  : {{ $user_details->marital_status }}</li>
  <li class="list-group-item">Children  : {{ $user_details->children }}</li>
  <li class="list-group-item">Salutation  : {{ $user_details->salutation }}</li>
  <li class="list-group-item">Category  : {{ $user_details->category }}</li>
  <li class="list-group-item">Physically Disabled  : {{ $user_details->physically_disabled }}</li>
  <li class="list-group-item">PNT No.  : {{ $user_details->pnt_no }}</li>
  <li class="list-group-item">Appointed On Quota  : {{ $user_details->appointed_on_quota }}</li>
  <li class="list-group-item">Salary  : {{ $user_details->salary }}</li>
  <li class="list-group-item">Achievement  : {{ $user_details->achievements }}</li>
  <li class="list-group-item">PAN No.  : {{ $user_details->pan_no }}</li>
  <li class="list-group-item">Aadhar No.  : {{ $user_details->aadhaar }}</li>
  </ul>
</div>
@endsection

