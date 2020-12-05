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

  <div class="container">
    <h1>{{$teachersData->firstname}} {{$teachersData->lastname}} Hiring Form: </h1>
  </div>
  <br>

<div class="container">
  <table class="table table-bordered table-dark "
    <tr>
      <td>Reg. Number</td>
      <td>{{$teachersData->regno}}</td>
    </tr>
    <tr>
        <td>Name</td>
        <td>{{$teachersData->name}}</td>
      </tr>
      <tr>
        <td>Father/Husband Name</td>
        <td>{{$teachersData->guardianname}}</td>
      </tr>
      <tr>
        <td>Subject</td>
        <td>{{$teachersData->subject}}</td>
      </tr>
      <tr>
        <td>Date of Joining</td>
        <td>{{$teachersData->doj}}</td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td>{{$teachersData->email}}</td>
      </tr>
      <tr>
        <td>Cell Number</td>
        <td>{{$teachersData->cellno}}</td>
      </tr>
      <tr>
        <td>Address</td>
        <td>{{$teachersData->address}}</td>
      </tr>
      <tr>
        <td>City</td>
        <td>{{$teachersData->city}}</td>
      </tr>
      <tr>
        <td>Country</td>
        <td>{{$teachersData->country}}</td>
      </tr>
      <tr>
        <td>Salary</td>
        <td>{{$teachersData->salary}}</td>
      </tr>


  </table>
  <a href="/project/public/faculty" class="btn btn-success">Back</a>
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

