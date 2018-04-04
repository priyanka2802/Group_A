<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       Bootstrap core CSS
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    i{
        margin:10px;
        color:white;
    }
        button {
            cursor: pointer;
            width: 120px;
        }
        img{
            border-radius:110px;
        }
        input[type=text], input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 3px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        outline: none;
        }
        input[type=text]:focus, input[type=number]:focus {
            border: 3px solid #555;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .deposit, .send {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
        height: 100%;
        width: auto;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        }

        .sidenavright {
        height: 100%;
        width: auto;
        position: fixed;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        }

.sidenav a, .sidenavright a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.5s;
}

.sidenav a:hover, .sidenavright a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn, .sidenavright .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

    </style>
  

</head>
<body>
    navbar
    
    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        @yield ('footer')
    </div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    @import "compass/css3";

body {
  font-family: "Source Sans Pro", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  background-color: #D3D3D3; 
}

a {
  color: #000;
  text-decoration: none;
}

.wrapper {
  width: 100%;
  max-width: 1200px;
  margin: 2rem auto;
  position: relative;
}

.post-list-subhead {
  text-transform: uppercase;
  color: #aaa;
  border-bottom: 1px solid #eee;
  padding: 0.4em 0;
  font-size: 80%;
  font-weight: 500;
  letter-spacing: 0.1em;
}

.post-item {
  padding: 10px 20px;
  margin: 20px 0;
  border-left: 6px solid #000;
  &:hover {
    background-color: #ddd;
  }
}


.post-item-header {
  border-bottom: 2px solid #000;
}

.post-item-title {
  font-size: 2em;
  color: #222;
  margin-bottom: 0.2em;
  font-weight: bold;
}

.post-item-category {
  margin: 0 0.1em;
  padding: 0.3em 1em;
  color: #fff;
  background: #000;
  font-size: 80%;
  text-decoration: none;
}

.post-item-more {
  text-transform: uppercase;
  padding: 2px 1px;
  margin: 0;
}

.post-item-more:hover {
  text-decoration: none;
  color: grey;
}
    i{
        margin:10px;
        color:white;
    }
        button {
            cursor: pointer;
            width: 120px;
        }
        img{
            border-radius:80px;
        }
        input[type=text], input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 3px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        outline: none;
        }
        input[type=text]:focus, input[type=number]:focus {
            border: 3px solid #555;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

    .sidenav {
    height: 100%;
    width: auto;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #B8C0D8;
    overflow-x: hidden;
    padding-top: 20px;
}

  .sidenavright {
    height: 100%;
    width: 18%;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color:#B8C0D8 ;
    overflow-x: hidden;
    padding-top: 20px;
}


.sidenav a,.sidenavright a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: black;
    display: block;
}

.sidenav a:hover,.sidenavright a:hover {
    color: grey;
}

.logo{
    border-radius: 0px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    </style>
  

</head>
<body>
    <!-- navbar -->

    <div class="jumbotron jumbotron-fluid" style="background-color: #D3D3D3 ">
  <div class="container" style="text-align: center;">
    <img src="http://icmmsc.iiti.ac.in/images/logo.png" alt="IITI" class="logo">      
  </div>

  <div class="container">
        @yield('nav')
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer" style="background-color: #1a384a ">
        @yield ('footer')
    </div>
</body>


</html>