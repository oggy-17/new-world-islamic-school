@extends('layout')

@section('content')


<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <a class="navbar-brand" href="/project/public">New World Islamic School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/project/public/sms/create">Add Student </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/project/public/sms">Students List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/project/public/faculty/create">Add Teacher</a>
      </li>

      <li class="nav-item">
          <a class="nav-link " href="/project/public/faculty">Teachers List</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/project/public/fees/create">Fee Form</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/project/public/fees">Fee List</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/project/public/attendance/create">Add Attendance</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="/project/public/attendance">Attendance List</a>
          </li>
  




    </ul>





  </div>
</nav>


<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

  <div class="container" text-align:center>
  <h1 class="studform">{{$studentDetails->firstname}} {{$studentDetails->lastname}} Admission Form:</h1>

  </div>
  <br>

<div class="container">
  <table class="table table-bordered table-dark "
    <tr>
      <td>Reg. Number</td>
      <td>{{$studentDetails->regno}}</td>
    </tr>
    <tr>
        <td>First Name</td>
        <td>{{$studentDetails->firstname}}</td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td>{{$studentDetails->lastname}}</td>
      </tr>
      <tr>
        <td>Father Name</td>
        <td>{{$studentDetails->fathername}}</td>
      </tr>
      <tr>
        <td>Father Occupation</td>
        <td>{{$studentDetails->fatheroccupation}}</td>
      </tr>
      <tr>
        <td>Mother Name</td>
        <td>{{$studentDetails->mothername}}</td>
      </tr>
      <tr>
        <td>Class</td>
        <td>{{$studentDetails->class}}</td>
      </tr>
      <tr>
        <td>Section</td>
        <td>{{$studentDetails->section}}</td>
      </tr>
      <tr>
        <td>Date of Birth</td>
        <td>{{$studentDetails->dob}}</td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td>{{$studentDetails->email}}</td>
      </tr>
      <tr>
        <td>Cell Number</td>
        <td>{{$studentDetails->cellno}}</td>
      </tr>
      <tr>
        <td>Address</td>
        <td>{{$studentDetails->address}}</td>
      </tr>
      <tr>
        <td>City</td>
        <td>{{$studentDetails->city}}</td>
      </tr>
      <tr>
        <td>Country</td>
        <td>{{$studentDetails->country}}</td>
      </tr>

  </table>
  <a href="/project/public/sms" class="btn btn-success">Back</a>
  <input class="btn btn-primary" type="button" value="Print Page"  onClick="window.print()">




</div>

<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }



@endsection

