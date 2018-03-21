@extends('session.master')
  

@section('title')
  Register
@endsection

@section('content')
  <form method="POST" action="/register">
      {{ csrf_field() }}
      @include ('errors.errors')
      
        <h1>Register</h1>
          <input type="number" id="emp_id" name="emp_id" placeholder="Employee id" required>

          <input type="text" id="name" name="name" placeholder="Name" required>

          <label for="sex">Sex:</label>
          <input type="radio" name="sex" value="M">Male &nbsp;&nbsp;&nbsp;
          <input type="radio" name="sex" value="F">Female &nbsp;&nbsp;&nbsp;

          <br>
          <br>
          <input type="email" id="email" name="email" placeholder="Email">
          
          <input type="password" id="password" name="password" placeholder="Password">

          <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">

          <label for="emp_type">Employee Type:</label>
          <input type="radio" name="emp_type" value="general">General <br>
          <input type="radio" name="emp_type" value="admin">Admin <br>
          <input type="radio" name="emp_type" value="recommending">Recommending Authority <br>
          <input type="radio" name="emp_type" value="approval">Approval Authority

          <br><br>

          <label for="dob">Date Of Birth:</label>
          <input type="date" id="dob" name="dob" placeholder="Date of Birth" required>
          
          <input type="number" id="aadhaar" name="aadhaar" placeholder="Aadhar Number">

          <input type="text" id="address" name="address" placeholder="Address">
          <input type="text" id="religion" name="religion" placeholder="Religion">
          <input type="text" id="caste" name="caste" placeholder="Caste">
          <input type="number" id="contact" name="contact" placeholder="Contact Number" required>

          <input type="number" id="pnt_no" name="pnt_no" placeholder="Pnt Number" required>

          <input type="text" id="pan_no" name="pan_no" placeholder="Pan Number" required>
          <input type="text" id="salutation" name="salutation" placeholder="Salutation">
          <input type="text" id="category" name="category" placeholder="Category">
          <input type="text" id="discipline" name="discipline" placeholder="Discipline">
          <input type="number" id="salary" name="salary" placeholder="Salary" required>
          

          <input type="text" id="appointed_on_quota" name="appointed_on_quota" placeholder="Appointed on Quota">
          <input type="text" id="achievements" name="achievements" placeholder="Achievements">
          <input type="text" id="hometown" name="hometown" placeholder="Hometown">
          <input type="text" id="marital_status" name="marital_status" placeholder="Marital status">

          <input type="number" id="children" name="children" placeholder="Children" required>
          <input type="number" id="cl_balance" name="cl_balance" placeholder="CL balance" required>
          <input type="text" id="photo" name="photo" placeholder="Image">

          
          <label for="physically_disabled">Physically disabled</label>
          <input type="radio" name="physically_disabled" id="physically_disabled" value="Y">Yes &nbsp; &nbsp; &nbsp;
          <input type="radio" name="physically_disabled" id="physically_disabled" value="N">No &nbsp; &nbsp; &nbsp;

          <br>
          <br>
        
        
        <button type="submit">Create My Account</button>
  </form>
@endsection
