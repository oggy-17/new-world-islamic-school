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
  <h2>Fee Reciept for : {{$feesDetails->firstname}} {{$feesDetails->lastname}} </h2>
  <h2>School Name : New World Islamic School</h2>
</div>
<br>
<div class="container">

  <table class="table table-bordered table-dark "
    <tr>
      <td>Reg. Number</td>
      <td>{{$feesDetails->regno}}</td>
    </tr>
    <tr>
        <td>First Name</td>
        <td>{{$feesDetails->firstname}}</td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td>{{$feesDetails->lastname}}</td>
      </tr>
      <tr>
        <td>Class</td>
        <td>{{$feesDetails->class}}</td>
      </tr>
      <tr>
        <td>Section</td>
        <td>{{$feesDetails->section}}</td>
      </tr>
      <tr>
        <td>Month</td>
        <td>{{$feesDetails->month}}</td>
      </tr>
      <tr>
        <td>Year</td>
        <td>{{$feesDetails->year}}</td>
      </tr>
      <tr>
        <td>Tution Fee</td>
        <td>{{$feesDetails->tutionfee}}</td>
      </tr>
      <tr>
        <td>Annual Fee</td>
        <td>{{$feesDetails->annualfee}}</td>
      </tr>
      <tr>
        <td>Total Fee</td>
        <td>{{$feesDetails->totalfee}}</td>
      </tr>
      <tr>
        <td>Amount Paid</td>
        <td>{{$feesDetails->feepaid}}</td>
      </tr>
      <tr>
        <td>Balance</td>
        <td>{{$feesDetails->balancefee}}</td>
      </tr>
      <tr>
        <td>Status</td>
        <td>{{$feesDetails->feestatus}}</td>
      </tr>

  </table>
  {{-- <a href="/project/public/fees" class="btn btn-success">Back</a> --}}
  <input class="btn btn-primary" type="button" value="Print Page"  onClick="window.print()">



</div>

<script type="text/javascript">
    function printDiv(container) {
        var printContents = document.getElementById(container).innerHTML;
        w=window.open();
        w.document.write(printContents);
        w.print();
        w.close();
    }



@endsection

