@extends ('layouts.layout')


@section('content')
	
	<div class="sidenav">
  <a href="#" style="text-align: center;">
  <img src="/images/{{ $user_details->photo }}" alt="user Image" height="200px" width="150/px"/>
  </a>
  <ul class="nav navbar-nav">
  <li class="menu-item">
  <a href="#">{{ $user_details->name }}</a></li>
  <li class="menu-item">
  <a href="#"><i class="fa fa-cog"></i>Profile Update</a></li>
  <li class="menu-item">
  <a href="/clform"><i class="fa fa-user"></i>Apply for Leave</a></li>
  <li class="menu-item">
  
  <a data-toggle="modal" data-target="#myModal" href=""><i class="fa fa-shopping-cart"></i>Check leave balance</a></li>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog"  >
    <div class="modal-dialog" style="position:center;">
    
      <!-- Modal content-->
      <div class="mod al-content"  style="position:center;background-color:white;">
        <div class="modal-header">
          <h2 class="modal-title">Leave balances</h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <ul>
          <li>Casual leaves: {{ $user_details->cl_balance }}</li>
          <li>Special casual leaves: {{ $user_details->cl_balance }}</li>
          <li>On duty leaves: {{ $user_details->cl_balance }}</li>
          <li>Half pay leaves: {{ $user_details->cl_balance }}</li>
          <li>Earned leaves: {{ $user_details->cl_balance }}</li>
          <li>Maternity leaves: {{ $user_details->cl_balance }}</li>
          <li>Paternity leaves: {{ $user_details->cl_balance }}</li>
          <li>Study leaves: {{ $user_details->cl_balance }}</li>
          <li>Extraordinary leaves: {{ $user_details->cl_balance }}</li>
          <li>Vacation leaves: {{ $user_details->cl_balance }}</li>


          
          
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </li>
  <li class="menu-item">
  <a href="/leave_history"><i class="fa fa-refresh"></i>Leave History</a></li>
  <li class="menu-item">
  
  <a href="/logout"><i class="fa fa-sign-out"></i>Logout</a></li>
  </ul>
  </div>

<div class="sidenavright">

  </div>


<div style="margin:20px;padding:10px;text-align:center;color:black">
  <h2>
    Your Profile 
  </h2>
</div>
  <div class="container">
  <table class="table table-striped">
    <tbody>
      <tr>
        <td style="font-weight: bold;">Name</td>
        <td>{{ $user_details->name }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Employee Code</td>
        <td>{{ $user_details->emp_id }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Date of Birth</td>
        <td>{{ $user_details->dob }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Sex</td>
        <td>{{ $user_details->sex }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Discipline</td>
        <td>{{ $user_details->discipline }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Address</td>
        <td>{{ $user_details->address }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Hometown</td>
        <td>{{ $user_details->hometown }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Religion</td>
        <td>{{ $user_details->religion }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Caste</td>
        <td>{{ $user_details->caste }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Contact No.</td>
        <td>{{ $user_details->contact }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Marital Status</td>
        <td>{{ $user_details->marital_status }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Children</td>
        <td>{{ $user_details->children }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Salutation</td>
        <td>{{ $user_details->salutation }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Category</td>
        <td>{{ $user_details->category }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Physically Disabled</td>
        <td>{{ $user_details->physically_disabled }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">PNT No.</td>
        <td>{{ $user_details->pnt_no }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Appointed On Quota</td>
        <td>{{ $user_details->appointed_on_quota }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Salary</td>
        <td>{{ $user_details->salary }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Achievements</td>
        <td>{{ $user_details->achievements }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">PAN No.</td>
        <td>{{ $user_details->pan_no }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Aadhar No.</td>
        <td>{{ $user_details->aadhaar }}</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection

