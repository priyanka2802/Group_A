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
                        <form action="/register" method="post" enctype="multipart/form-data" class="form-horizontal">
                        	{{ csrf_field() }}
      							@include ('errors.errors')
                               
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="emp_id" class=" form-control-label">Employee Id</label></div>
                            <div class="col-12 col-md-9"><input type="text" placeholder="Employee Id" id="emp_id" name="emp_id" p class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Full Name" type="text" name="name" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Sex</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="male" class="form-check-label ">
                                    <input type="radio" id="male" name="sex" value="M" class="form-check-input">Male
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="female" class="form-check-label ">
                                    <input type="radio" id="female" name="sex" value="F" class="form-check-input">Female
                                  </label>
                                </div>
                             </div>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email" class=" form-control-label">Email Input</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Enter Email" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password" name="password" placeholder="Password" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="password_confirmation" class=" form-control-label">Confirm Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="emp_type" class=" form-control-label">Type</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="general" class="form-check-label ">
                                    <input type="radio" id="general" name="emp_type" value="general" class="form-check-input">General
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="Approving" class="form-check-label ">
                                    <input type="radio" id="approval" name="emp_type" value="approval" class="form-check-input">Approving Authority
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="emp_type" class="form-check-label ">
                                    <input type="radio" id="Recommending" name="emp_type" value="recommending" class="form-check-input">Recommending Recommending
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="emp_type" class="form-check-label ">
                                    <input type="radio" id="admin" name="emp_type" value="admin" class="form-check-input">Admin
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="aadhaar" class=" form-control-label">Aadhaar</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Aadhaar" type="number" name="aadhaar" class="form-control">
                            </div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="dob" class=" form-control-label">Date Of Birth</label></div>
                            <div class="col-12 col-md-9"><input placeholder="yyyy/mm/dd" type="text" name="dob" class="form-control">
                            </div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="discipline" class=" form-control-label">Discipline</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Discipline" type="text" name="discipline" class="form-control">
                            </div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="address" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Address" type="text" name="address" class="form-control">
                            </div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="religion" class=" form-control-label">Religion</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Religion" type="text" name="religion" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="caste" class=" form-control-label">Caste</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Caste" type="text" name="caste" class="form-control">
                            </div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="contact" class=" form-control-label">Contact</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Contact" type="number" name="contact" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="pnt_no" class=" form-control-label">PNT Number</label></div>
                            <div class="col-12 col-md-9"><input placeholder="PNT Number" type="number" name="pnt_no" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="pan_no" class=" form-control-label">Pan</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Pan" type="text" name="pan_no" class="form-control">
                            </div>
                          </div>
                        
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="salutation" class=" form-control-label">Salutation</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Salutation" type="text" name="salutation" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="category" class=" form-control-label">Category</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Category" type="text" name="category" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="salary" class=" form-control-label">Salary</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Salary" type="number" name="salary" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="appointed_on_quota" class=" form-control-label">Appointed On Quota</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Quota" type="text" name="appointed_on_quota" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="achievements" class=" form-control-label">Achievements</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Achievements" type="text" name="achievements" class="form-control">
                            </div>
                          </div>
                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hometown" class=" form-control-label">Hometown</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Hometown" type="text" name="hometown" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="marital_status" class=" form-control-label">Marital Status</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Marital Status" type="text" name="marital_status" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="children" class=" form-control-label">Children</label></div>
                            <div class="col-12 col-md-9"><input placeholder="Children" type="number" name="children" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="physically_disabled" class=" form-control-label">Physically Disabled</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="yes" class="form-check-label ">
                                    <input type="radio" id="physically_disabled" name="physically_disabled" value="Y" class="form-check-input">Yes
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="No" class="form-check-label ">
                                    <input type="radio" id="physically_disabled" name="physically_disabled" value="N " class="form-check-input">No
                                  </label>
                                </div>
                          </div>
                      </div>
                  </div>
                   <div class="row form-group">
                            <div class="col col-md-3"><label for="cl_balance" class=" form-control-label">CL Balance</label></div>
                            <div class="col-12 col-md-9"><input placeholder="CL Balance" type="number" name="cl_balance" class="form-control">
                            </div>
                          </div>
                 
                     <div class="row form-group">
                            <div class="col col-md-3"><label for="photo" class=" form-control-label">Upload User Image</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="photo" name="photo" class="form-control-file"></div>
                          </div>
                           
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="aadhaar_pic" class=" form-control-label">Upload Aadhaar Image</label></div>
                            <div class="col-12 col-md-9"><input type="file"  id="aadhaar_pic" name="aadhaar_pic" class="form-control-file"></div>
                          </div>
          					

  <div class="row form-group">
                            <div class="col col-md-3"><label for="disability_pic" class=" form-control-label">Upload Disability Certificate</label></div>
                            <div class="col-12 col-md-9"><input type="file"  id="disability_pic" name="disability_pic" class="form-control-file"></div>
                          </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="pan_pic" class=" form-control-label">Upload Pan Number</label></div>
                            <div class="col-12 col-md-9"><input type="file"  id="pan_pic" name="pan_pic" class="form-control-file"></div>
                          </div>
  
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="caste_pic" class=" form-control-label">Upload Caste Certificate</label></div>
                            <div class="col-12 col-md-9"><input type="file"  id="caste_pic" name="caste_pic" class="form-control-file"></div>
                          </div>
  
  						 <div class="row form-group">
                            <div class="col col-md-3"><label for="achievement_pic" class=" form-control-label">Upload Achievement <small>in pdf only</small></label></div>
                            <div class="col-12 col-md-9"><input type="file" id="achievement_pic" name="achievement_pic" class="form-control-file"></div>
                          </div>
  
 							                              
                          <div>
                          <button id="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                              <i class="fa fa-lock fa-sm"></i>&nbsp;
                                              <span id="submit">Submit</span>
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

