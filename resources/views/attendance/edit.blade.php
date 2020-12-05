@extends('layout')

@section('content')

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/project/public">School Management System</a>
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
        <a class="nav-link" href="/project/public/faculty/create">Add Teacher</a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="/project/public/faculty">Teachers List</a>
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
<div class="card uper">
  <div class="card-header">
    Edit Teacher Attendance Details
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
      <form method="post" action="{{ route('attendance.update', $editAttendanceDetails->id ) }}">

        <div class="form-group">
          @method('PATCH')
          <label for="regno">Registration Number :</label>
          <input type="text" class="form-control" name="regno" value="{{ $editAttendanceDetails->regno }}"/>
      </div>


          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name :</label>
              <input type="text" class="form-control" name="name" value="{{ $editAttendanceDetails->name }}"/>
          </div>

          <div class="form-group">
            @method('PATCH')
            <label for="subject">Subject :</label>
            <input type="text" class="form-control" name="subject" value="{{ $editAttendanceDetails->subject }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="month">Month :</label>

            <select  name="month" class="custom-select" id="inputGroupSelect01">
              <option hidden selected value="{{ $editAttendanceDetails->month }}">{{ $editAttendanceDetails->month }}</option>
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
            @method('PATCH')
            <label for="date">Date :</label>
            <input type="date" class="form-control" name="date" value="{{ $editAttendanceDetails->date }}"/>
        </div>



        <div class="form-group">
            @method('PATCH')

            <label for="status">Status</label>
            <select class="custom-select" id="inputGroupSelect01" name="status">
                <option hidden selected value="{{ $editAttendanceDetails->status }}">{{ $editAttendanceDetails->status }}</option>
                <option value="Present">Present</option>
                <option value="Absent">Absent</option>
                <option value="Leave">Leave</option>
            </select>
          </div>


          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection