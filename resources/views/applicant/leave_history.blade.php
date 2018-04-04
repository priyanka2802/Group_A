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
                            <strong class="card-title">Leave History</strong>
                        </div>

<hr>
@foreach($user_details as $user_details)
    <div class="container-fluid">
        <header class="post-item-header">
            <h5>Leave ID: {{$user_details->ID}}</h5>
           <p class="post-item-meta">
             <span class="post-item-date">Leave start date: {{$user_details->start_date}}</span>
            </p>
        </header>

        <div class="post-item-description">
            <p>
                Purpose Of Leave: {{$user_details->purpose}}
            </p>
            <p>Number of Days of Leave: {{ $user_details->no_of_days }}</p>
        </div>
    </div>
<hr>
@endforeach

</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection
