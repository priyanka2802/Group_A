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
                            <strong class="card-title">Profile</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="card-title">
                                      <h3 class="text-center"><i class="fa fa-user">&nbsp</i>User</h3>
                                  </div>
                                  <hr>
                                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Basic Form</strong> Elements
                      </div>
                      <div class="card-body card-block">
                        <form action="/Addholidays" method="post" enctype="multipart/form-data" class="form-horizontal" data-toggle="validator">
                        	{{ csrf_field() }}
      							@include ('errors.errors')

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="date" class=" form-control-label">Date Of Holiday</label></div>
                            <div class="col-12 col-md-9"><input placeholder="yyyy/mm/dd" type="date" name="date" class="form-control">
                            </div>
                          </div>
                      
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="Description" class=" form-control-label">Description </label></div>
                            <div class="col-12 col-md-9"><input placeholder="Description" type="text" name="Description" class="form-control">
                            </div>
                          
                          <button id="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                              <i class="fa fa-lock fa-sm"></i>&nbsp;
                                              <span id="submit">Add Holiday</span>
                                         </button>
                                      </div>
                        </form>
                    </div>
                </div>

            </div>
    </div> <!-- .card -->
</div><!--/.col-->
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
