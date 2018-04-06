@extends('admin.layoutadmin')

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


                         <div class="container-fluid">
              <form action="{{ action('RegistrationController@updateUsers') }}" method="post" enctype="multipart/form-data" class="form-horizontal" style="width:100%">
                 {{ csrf_field() }}
             <!--   <div class="col-md-3 col-lg-3 " align="center">  </div>
                <div class="col-md-3 col-lg-3 ">
                    <h1 style="padding:40px;margin:10px;"></h1>
                </div>
              -->  
                
                <div class="container"> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><img  class="img-thumbnail" height="200" width="300" alt="User Pic" src="{{ asset("images/$user_details->photo ") }}" class=""></td>
                        <td><h1><center>{{$user_details->salutation}}&nbsp{{$user_details->name}}</center></h1></td>
                      </tr>
                      
                      <tr>
                        <td>Employee:</td>
                        <td><input value="{{$user_details->emp_id}}" type="text" name="emp_id" class="form-control"></td>
                      </tr>
                      
                     
                      <tr>
                        <td>Sex:</td>
                        <td><input value="{{$user_details->sex}}" type="text" name="sex" class="form-control"></td>
                      </tr>
                      
                       <tr>
                        <td>Date of Birth</td>
                        <td><input value="{{$user_details->dob}}"  type="date" name="dob" class="form-control"></td>
                      </tr>
                   

                      <tr>
                        <td>Address:</td>
                        <td><input value="{{$user_details->address}}" type="text" name="address" class="form-control"></td>
                      </tr>
                      
                      <tr>
                        <td>Employee Type:</td>
                        <td><input value="{{$user_details->emp_type}}" type="text" name="emp_type" class="form-control"></td>
                      </tr>
                      
                      

                      <tr>
                        <td>Home Town:</td>
                        <td><input value="{{$user_details->hometown}}" type="text" name="hometown" class="form-control"></td>
                      </tr>
                      

                      <tr>
                        <td>Contact Number:</td>
                        <td><input value="{{$user_details->contact}}" type="text" name="contact" class="form-control"></td>
                      </tr>

                      <tr>
                        <td>Discipline:</td>
                        <td><input value="{{$user_details->discipline}}" type="text" name="discipline" class="form-control"></td>
                      </tr>
                      
                      
                      <tr>
                        <td>Physically Disabled:</td>
                        <td><input value="{{$user_details->physically_disabled}}" type="text" name="physically_disabled" class="form-control"></td>
                      </tr>
                      

                      <tr>
                        <td>Caste:</td>
                        <td><input value="{{$user_details->caste}}" type="text" name="caste" class="form-control"></td>
                      </tr>
                      
                      <tr>
                        <td>Religion:</td>
                        <td><input value="{{$user_details->religion}}" type="text" name="religion" class="form-control"></td>
                      </tr>
                      

                      <tr>
                        <td>Category:</td>
                        <td><input value="{{$user_details->category}}" type="text" name="category" class="form-control"></td>
                      </tr>
            
                      <tr>
                        <td>Email</td>
                        <td><input value="{{$user_details->email}}" type="text" name="email" class="form-control"></td>
                      </tr>
                       
                       <tr>
                        <td>Achievements</td>
                        <td><input value="{{$user_details->achievements}}" type="text" name="achievements" class="form-control"></td>
                      </tr>
                   
                      <tr>
                        <td>PNT Number</td>
                        <td><input value="{{$user_details->pnt_no}}" type="text" name="pnt_no" class="form-control"></td>
                      </tr>
                   
                      <tr>
                        <td>Pan Number</td>
                        <td><input value="{{$user_details->pan_no}}" type="text" name="pan_no" class="form-control"></td>
                      </tr>
                   
                      <tr>
                        <td>Aadhaar Number</td>
                        <td><input value="{{$user_details->aadhaar}}" type="text" name="aadhaar" class="form-control"></td>
                      </tr>
                   
                      <tr>
                        <td>Marital Status:</td>
                        <td><input value="{{$user_details->marital_status}}" type="text" name="marital_status" class="form-control"></td>
                      </tr>
                      
                      <tr>
                        <td>Children:</td>
                        <td><input value="{{$user_details->children}}" type="text" name="children" class="form-control"></td>
                      </tr>

                      <tr>
                        <td>Appointed On Quota:</td>
                        <td><input value="{{$user_details->appointed_on_quota}}" type="text" name="appointed_on_quota" class="form-control"></td>
                      </tr>

                      <tr>
                        <td>Salary:</td>
                        <td><input value="{{$user_details->salary}}" type="text" name="salary" class="form-control"></td>
                      </tr>
                      
                    
                     <tr>
                        <td>Aadhaar Image
                          </td>
                        <td><a  href="{{ asset("images/$user_details->aadhaar_pic ") }}">Download</a>
                        </td>
                    </tr> 
                    <tr>
                        <td>Pan Image</td>
                        <td><a href="{{ asset("images/$user_details->pan_pic ") }}">Download</a></td>
                    </tr> 
                    <tr>
                        <td>Caste Certificate</td>
                        <td><a href="{{ asset("images/$user_details->caste_pic ") }}" alt="Not Applicale">Download</a></td>
                    </tr>  
                    <tr>
                        <td> Achievements</td>
                        <td><a href="{{ asset("images/$user_details->achievement_pic") }}" alt="Not Applicale">Download</download</a></td>
                    </tr> 
                    <tr>
                        <td>Disablitiy Image</td>
                        <td><a href="{{ asset("images/$user_details->disability_pic") }}" alt="Not Applicable">Download</a></td>
                    </tr>  
 

                    </tbody>
                  </table>
                  <div>
                  <button id="submit" type="submit" class="btn btn-lg btn-info btn-block">
                    <span id="submit">Edit</span></button>
                  </div>
                        
                
            </form>
            </div>








                  </div>
    

            </div>
    </div>
  </div>
 </div>
 </div> <!-- .card -->
</div>
@endsection
