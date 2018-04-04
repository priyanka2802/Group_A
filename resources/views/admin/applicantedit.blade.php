@extends('admin.layoutadmin')

@section('style')

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

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
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
              <form action="{{ action('RegistrationController@updateUsers') }}" method="post" enctype="multipart/form-data" class="form-horizontal" style="width:100%">
                 {{ csrf_field() }}
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{ asset("images/$user_details->photo ") }}" class=""> </div>
                <div class="col-md-3 col-lg-3 ">
                    <h1 style="padding:40px;margin:10px;"><center>{{$user_details->salutation}}&nbsp{{$user_details->name}}</center></h1>
                </div>
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Employee Id:</td>
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
                        <td><img id="myImg" class="img-responsive" height="250px" weight="250px"  src="{{ asset("images/$user_details->aadhaar_pic ") }}"></td>
                    </tr> 
                    <tr>
                        <td>Pan Image</td>
                        <td><img id="myImg" class="img-responsive" height="250px" weight="250px" src="{{ asset("images/$user_details->pan_pic ") }}"></td>
                    </tr> 
                    <tr>
                        <td>Caste Certificate</td>
                        <td><img id="myImg" class="img-responsive" height="250px" weight="250px" src="{{ asset("images/$user_details->caste_pic ") }}" alt="Not Applicale"></td>
                    </tr>  
                    <tr>
                        <td> Achievements</td>
                        <td><img id="myImg" class="img-responsive" height="250px" weight="250px" src="{{ asset("images/$user_details->achievement_pic") }}" alt="Not Applicale"></td>
                    </tr> 
                    <tr>
                        <td>Disablitiy Image</td>
                        <td><img id="myImg" class="img-responsive" height="250px" weight="250px" src="{{ asset("images/$user_details->disability_pic") }}" alt="Not Applicable"></td>
                    </tr>  
 
     <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
      
 

                    </tbody>
                  </table>
                  <div>
                  <button id="submit" type="submit" class="btn btn-lg btn-info btn-block">
                    <span id="submit">Edit</span></button>
                  </div>
                        
                </div>
            </form>
            </div>
      
                
            </div>
      </div>   

@endsection
