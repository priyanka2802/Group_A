<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration</title>
    <meta name="description" content="Registration">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Elements</h3><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="forms-basic.html" > <i class="menu-icon fa fa-user"></i>Create User</a>
                        
                    </li>
                    <li class="menu-item">
                        <a href="#" > <i class="menu-icon fa fa-table"></i>Update User</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" > <i class="menu-icon fa fa-pencil"></i>Delete User</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" > <i class="menu-icon fa fa-pencil"></i>Manage Holidays</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" > <i class="menu-icon fa fa-table"></i>Manage Leaves</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" > <i class="menu-icon fa fa-table"></i>Check Status Of Leaves</a>
                    </li>
                    
                    
                   
                    
                    <h3 class="menu-title">Search By</h3><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="#" > <i class="menu-icon fa fa-search"></i>Name
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="#" > <i class="menu-icon fa fa-search"></i>Name
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" > <i class="menu-icon fa fa-search"></i>Name
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#" > <i class="menu-icon fa fa-search"></i>Name
                        </a>
                    </li>
                    
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

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
                                      <h3 class="text-center">User</h3>
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
                            <div class="col-12 col-md-9"><input placeholder="yyyy/mm/dd" type="data-toggle" name="dob" class="form-control">
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

        
    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>
