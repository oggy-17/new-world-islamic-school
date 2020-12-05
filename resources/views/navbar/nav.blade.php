@extends('layout')

@section('content')


<nav class="navbar navbar-expand-md navbar-toggler navbar-collapse navbar-dark  bg-dark">
<div class="navbar-header navrbar-responsive">

  <a id="" class="navbar-brand" rel="home" href="/project/public" title="New World Islamic School">
      <img style="max-width:100px; margin-top: -10px;"
           src=""> <h1 class="display-3 blockquote text-center">New World Islamic School</h1>
  </a>
</div>
</nav>
  <div class="sidebar">
    <a class="nav-link" href="/project/public/sms/create">Add Student </a>
    <a class="nav-link" href="/project/public/sms">Students List</a>
    <a class="nav-link" href="/project/public/faculty/create">Add Teacher</a>
    <a class="nav-link" href="/project/public/faculty">Teachers List</a>
    <a class="nav-link" href="/project/public/fees/create">Fee Form</a>
    <a class="nav-link" href="/project/public/fees">Fee List</a>
    <a class="nav-link" href="/project/public/attendance/create">Attendance</a>
    <a class="nav-link" href="/project/public/attendance">Attendance List</a>




</div>

<div class="image">
  <img src="images/6.jpg" class="img-fluid" alt="">
</div>








  @endsection