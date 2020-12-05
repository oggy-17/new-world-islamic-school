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
    Edit Teacher Details
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
      <form method="post" action="{{ route('faculty.update', $teacherData->id ) }}">

        <div class="form-group">
          @method('PATCH')
          <label for="regno">egistration Number :</label>
          <input type="text" class="form-control" name="regno" value="{{ $teacherData->regno }}"/>
      </div>


          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="firstname">Name :</label>
              <input type="text" class="form-control" name="firstname" value="{{ $teacherData->name }}"/>
          </div>

          <div class="form-group">
            @method('PATCH')
            <label for="lastname">Father/Husband Name :</label>
            <input type="text" class="form-control" name="lastname" value="{{ $teacherData->guardianname }}"/>
        </div>

        <div class="form-group">
          @method('PATCH')
          <label for="subject">Subject :</label>
          <input type="text" class="form-control" name="subject" value="{{ $teacherData->subject }}"/>
      </div>

        <div class="form-group">
            @method('PATCH')
            <label for="doj">Date of Joining :</label>
            <input type="text" class="form-control" name="doj" value="{{ $teacherData->doj }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="email">E-mail :</label>
            <input type="text" class="form-control" name="email" value="{{ $teacherData->email }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="cellno">Cell Number :</label>
            <input type="text" class="form-control" name="cellno" value="{{ $teacherData->cellno }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="address">Residential Address :</label>
            <input type="textarea" rows="3" columns="3" class="form-control" name="address" value="{{ $teacherData->address }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="city">City :</label>
            <input type="text" class="form-control" name="city" value="{{ $teacherData->city }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="country">Country :</label>
            <input type="text" class="form-control" name="country" value="{{ $teacherData->country }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="salary">Salary :</label>
            <input type="text" class="form-control" name="salary" value="{{ $teacherData->salary }}"/>
        </div>

          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection