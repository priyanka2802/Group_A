<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
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

@media  screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

    </style>
  

</head>
<body>
  <!-- navbar -->
  
  <div class="container">
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times</a>
  <a href="#">
  <img src="ava/Sunil_Kumar.jpg" height="200px" width="150/px" />
  </a>
  <a href="#">Recommending Authority</a>
  <a href="#"><i class="fa fa-cog"></i>Profile Setting</a>
  <a href="#"><i class="fa fa-plus"></i>Apply For Leave</a>
  </div>

<h1 align="center">LEAVE MANAGEMENT - IITI</h1>
<h3 align="center">Recommending Authority'S HOMEPAGE</h3>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Dashboard</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>


  <div id="mySidenav2" class="sidenavright">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times</a>
  <a href="#">
  <img src="ava/Sunil_Kumar.jpg" height="200px" width="150/px" />
  </a>
  <a href="#">Recommending Authority</a>
  <a href="#"><i class="fa fa-cog"></i>Notification</a>
  <a href="#"><i class="fa fa-plus"></i>Calendar</a>
  <?php if(Auth::check()): ?>
  <a href="/logout"><i class="fa fa-sticky-note-o"></i>Log-out</a>
  <?php endif; ?>
  </div>


<span style="font-size:30px;cursor:pointer;float:right;" onclick="openNav2()">&#9776; Notification-bar</span>

<?php echo $__env->yieldContent('nav'); ?>

<script>
function openNav2() {
    document.getElementById("mySidenav2").style.width = "250px";
}

function closeNav2() {
    document.getElementById("mySidenav2").style.width = "0";
}
</script>

    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <!-- <div class="footer">
    <?php echo $__env->yieldContent('footer'); ?>
  </div> -->
</body>
</html>


