@extends('layout')

@section('content')

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/project/public">New World Islamic School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
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

  <style>
    /* Style The Dropdown Button */
    .dropbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    /* Links inside the dropdown */
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #f1f1f1}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
      background-color: #3e8e41;
    }
    </style>

    <div class="dropdown">
      <button class="dropbtn">Select Class</button>
      <div class="dropdown-content">
        <a href="stdclassMont">Montessori</a>
        <a href="stdclassSrMont">Senior Montessori</a>
        <a href="stdclassAdvMont">Advance Montessori</a>
        <a href="stdclass1">1</a>
        <a href="stdclass2">2</a>
        <a href="stdclass3">3</a>
        <a href="stdclass4">4</a>
        <a href="stdclass5">5</a>
        <a href="stdclass6">6</a>
        <a href="stdclass7">7</a>
        <a href="stdclass8">8</a>
        <a href="stdclass9">9</a>
        <a href="stdclass10">10</a>

      </div>
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





  <table id="datatb" class="table table-striped table-hover table-responsive">
    <thead>
        <tr>

          <td> <strong> Reg. Number</strong></td>
          <td><strong>First Name</strong></td>
          <td><strong>Last Name</strong></td>
          <td><strong>Father Name</strong></td>
          <td><strong>Father Occupation</strong></td>
          <td><strong>Mother Name</strong></td>
          <td><strong>Class</strong></td>
          <td><strong>Section</strong></td>
          <td><strong>DOB</strong></td>
          <td><strong>E-mail</strong></td>
          <td><strong>Cell Number</strong></td>
          <td><strong>Address</strong></td>
          <td><strong>City</strong></td>
          <td><strong>Country</strong></td>
          <td><strong>Show</strong></td>
          <td><strong>Edit</strong></td>
          <td><strong>Delete</strong></td>
        </tr>
    </thead>
    <tbody>
        @foreach($studentDetails as $studentDetail)
        <tr>

            <td>{{$studentDetail->regno}}</td>
            <td>{{$studentDetail->firstname}}</td>
            <td>{{$studentDetail->lastname}}</td>
            <td>{{$studentDetail->fathername}}</td>
            <td>{{$studentDetail->fatheroccupation}}</td>
            <td>{{$studentDetail->mothername}}</td>
            <td>{{$studentDetail->class}}</td>
            <td>{{$studentDetail->section}}</td>
            <td>{{$studentDetail->dob}}</td>
            <td>{{$studentDetail->email}}</td>
            <td>{{$studentDetail->cellno}}</td>
            <td>{{$studentDetail->address}}</td>
            <td>{{$studentDetail->city}}</td>
            <td>{{$studentDetail->country}}</td>
            <td><a href="{{ route('sms.show', $studentDetail->id)}}" class="btn btn-success">Show</a></td>
             <td><a href="{{ route('sms.edit', $studentDetail->id)}}" class="btn btn-primary">Edit</a></td>
             <td>
                <form action="{{ route('sms.destroy', $studentDetail->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>



@endsection


@push('script')
<script type="text/javascript">


  $(document).ready( function () {
      $('#datatb').DataTable();
  } );

</script>

@endpush