@extends ('layouts.layout')


@section('content')
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
  <a href="#" style="text-align: center;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbTzYAUrDCsawDGrujPE8i_3i6YQYOBySJCH0xr0rIyBEz2OVZgg" height="200px" width="150/px" />
  </a>
  <a href="#">Admin</a>
  <a href="/register"><i class="fa fa-plus"></i>Create User</a>
  <a href="#"><i class="fa fa-user"></i>Update User</a>
  <a href="#"><i class="fa fa-minus"></i>Delete User</a>
  <a href="#"><i class="fa fa-search"></i>Search User</a>
  <a href="#"><i class="fa fa-pencil"></i>Manage Holidays</a>
  <a href="#"><i class="fa fa-pencil"></i>Manage Leaves</a>
  <a href="#"><i class="fa fa-sticky-note-o"></i>Check Status of Leaves</a>
  <a href="/logout"><i class="fa fa-sign-out"></i>Logout</a>
  </div>


<!-- 
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script> -->


@endsection
