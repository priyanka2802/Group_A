@extends('applicant.applicantlayout')

@section('content')

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>

         <div class="content mt-4">
            <div class="animated fadeIn">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">User</strong>
                        </div>
			<table class="table">
    <tbody>
      <tr>
        <td><img height="200" width="300" src="{{ asset("images/$user_details->photo ") }}"</td>
        <td >
        <span style="font-weight: bold  ">{{ $user_details->name }}</span></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Name</td>
        <td>{{ $user_details->name }}</td>
      </tr>
       <tr>
        <td style="font-weight: bold;">Employee Type</td>
        <td>{{ $user_details->emp_type }}</td>
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


            </div>
    </div>
  </div>
 </div>
 </div> <!-- .card -->
</div>

@endsection
