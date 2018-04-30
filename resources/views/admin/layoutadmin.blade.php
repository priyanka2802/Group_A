<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ URL::asset('apple-icon.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}">
    @yield('head')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ URL::asset('assets/scss/style.css') }}">
    <link href="{{ URL::asset('assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<style>
    @yield('style')
    .hey {
        border: 10px solid #fff;
        border-bottom: 15px solid #fff;
        -webkit-box-shadow: 3px 3px 3px #777;
        -moz-box-shadow: 3px 3px 3px #777;
        box-shadow: 3px 3px 3px #777;

         -webkit-transition: margin 0.2s ease-out;
        -moz-transition: margin 0.2s ease-out;
        -o-transition: margin 0.2s ease-out;
        background-color: white;
    }
    }
    .hey p {
        text-align: center;
        color: #D51386;
    }
    .hey a {
        -webkit-transition: margin 0.2s ease-out;
        -moz-transition: margin 0.2s ease-out;
        -o-transition: margin 0.2s ease-out;
    }
    .hey a:hover {
        margin-bottom: 5px;
    }

    .hey:hover{
        margin-top: -10px;
    }

</style>
</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img style="margin:30px 5px" class="img-responsive" height="100"  width="100" src="{{ URL::asset('images/iit.jpg') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ URL::asset('images/iit.jpg') }}" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('/admin') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="mepnu-title">Elements</h3><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="{{ url('/register') }}" > <i class="menu-icon fa fa-user"></i>Create User</a>

                    </li>
                    <li class="menu-item">
                        <a href="#"  data-toggle="modal" data-target="#myModal" > <i class="menu-icon fa fa-pencil"></i>Delete User</a>
                       <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

      <!-- Modal content-->
                      <div class="container">
                        <div class="modal-content" style="position:center">
                            <div class="modal-header">
                                <h4 class="modal-title">Delete User</h4>

                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="/delete" method="post" enctype="multipart/form-data" class="form-horizontal">
                            {{ csrf_field() }}
                                @include ('errors.errors')

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="emp_id" class=" form-control-label">Employee Id</label></div>
                            <div class="col-12 col-md-9"><input type="text" placeholder="Employee Id" id="emp_id" name="emp_id" p class="form-control">
                            </div>

                          </div>
                          <div>
                          <button id="submit" type="submit" class="btn btn-lg btn-info btn-block">
                                              <span id="submit">Delete</span>
                                         </button>
                                      </div>

                        </form>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>

                            </div>

                    </div>
                  </div>
                    </li>
                    <li class="menu-item">
                        <a href="/holidaylist" > <i class="menu-icon fa fa-pencil"></i>Holidays</a>
                    </li>
                    <li class="menu-item">
                        <a href="/Displayholidays" > <i class="menu-icon fa fa-table"></i>Add Holidays</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/calendar') }}" > <i class="menu-icon fa fa-table"></i>Calendar</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/search') }}" > <i class="menu-icon fa fa-search"></i>Search</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/logout') }}" > <i class="menu-icon fa fa-table"></i>Logout</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->




    @yield('content')

    <!-- Right Panel -->

    <script src="{{ URL::asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ URL::asset('assets/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="{{ URL::asset('assets/js/lib/chart-js/Chart.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ URL::asset('assets/js/widgets.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ URL::asset('assets/js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>
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
