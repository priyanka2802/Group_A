 @extends('admin.layoutadmin')

@section('head')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
@endsection

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
                            <strong class="card-title">Search</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <h2>Search By</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Employee Id</th>
        <th>Name</th>
        <th>Type</th>
        <th>Caste</th>

        <th>Date Of Birth</th>
        <th>Sex</th>
        <th>Religion</th>
        <th>Aadhaar</th>
        <th>Disability</th>
        <th>Discipline</th>
    </tr>
    </thead>
    <tbody id="myTable">
    	
    	@foreach( $details as $user_details)
    <tr>
    	<td><a href="/update/{{$user_details->emp_id}}">{{$user_details->emp_id}}</a></td>
    	<td>{{$user_details->name}}</td>
    	<td>{{$user_details->emp_type}}</td>
    	<td>{{$user_details->caste}}</td>
        <td>{{$user_details->dob}}</td>
        <td>{{$user_details->sex}}</td>
        <td>{{$user_details->religion}}</td>
        <td>{{$user_details->aadhaar}}</td>
        <td>{{$user_details->physically_disabled}}</td>
        <td>{{$user_details->discipline}}</td>
   </tr>
    	@endforeach
    </tbody>
    </tbody>
  </table>
  
                    </div>
                </div>

            </div>
    </div>
  </div>
 </div>
 </div> <!-- .card -->
</div><!--/.col-->
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="dob"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy/mm/dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
@endsection

