@extends('layout')

@section('content')


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/project/public">School Management System</a>
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
            <a class="nav-link" href="/project/public/fees/create">Fee Form</a>
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
<div class="card uper">
  <div class="card-header">
    <h3> <b>Teacher Attendance Form</b> </h3>

  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" class="" action="{{ route('attendance.store') }}">
        <div class="form-group">
            <label for="regno"> Registration Number :</label>
            <input type="number" class="form-control" name="regno"/>
        </div>
  
  
            <div class="form-group">
                @csrf
                <label for="name">Name :</label>
                <input type="text" class="form-control" name="name"/>
            </div>

          <div class="form-group">
            <label for="subject">Subject :</label>
            <input type="text" class="form-control" name="subject"/>
        </div>



        <div class="form-group">
          <label for="month">Month :</label>

            <select  name="month" class="custom-select" id="inputGroupSelect01">
              <option selected>Choose...</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May ">May </option>
              <option value="June ">June </option>
              <option value="July ">July </option>
              <option value="August ">August </option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
            </select>
        </div>




        <div class="form-group">
            <label for="date">Date :</label>
            <input type="date" class="form-control" name="date"/>
        </div>

        <div class="form-group">
          <label for="status">Status</label>

          <select  name="status" class="custom-select" id="inputGroupSelect01">
            <option selected>Choose...</option>
            <option value="Present">Present</option>
            <option value="Absent">Absent</option>
            <option value="Leave">Leave</option>
          </select>
        </div>

          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>


<script>


  
  
  </script>
@endsection