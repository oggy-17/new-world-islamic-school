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
    Edit Student Details
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
      <form method="post" action="{{ route('sms.update', $editDetails->id ) }}">

        <div class="form-group">
          @method('PATCH')
          <label for="regno">egistration Number :</label>
          <input type="text" class="form-control" name="regno" value="{{ $editDetails->regno }}"/>
      </div>


          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="firstname">First Name :</label>
              <input type="text" class="form-control" name="firstname" value="{{ $editDetails->firstname }}"/>
          </div>

          <div class="form-group">
            @method('PATCH')
            <label for="lastname">Last Name :</label>
            <input type="text" class="form-control" name="lastname" value="{{ $editDetails->lastname }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="fathername">Father Name :</label>
            <input type="text" class="form-control" name="fathername" value="{{ $editDetails->fathername }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="fatheroccupation">Father Occupation :</label>
            <input type="text" class="form-control" name="fatheroccupation" value="{{ $editDetails->fatheroccupation }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="mothername">Mother Name :</label>
            <input type="text" class="form-control" name="mothername" value="{{ $editDetails->mothername }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')

            <select class="custom-select" id="inputGroupSelect01" name="class">
              <option hidden selected value="{{$editDetails->class}}">{{ $editDetails->class }}</option>
              <option value="Montessori">Montessori</option>
              <option value="Senior Montessori">Senior Montessori</option>
              <option value="Advance Montessori">Advance Montessori</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>

            </select>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="section">Section :</label>
            <input type="text" class="form-control" name="section" value="{{ $editDetails->section }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="dob">Date of Birth :</label>
            <input type="text" class="form-control" name="dob" value="{{ $editDetails->dob }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="email">E-mail :</label>
            <input type="text" class="form-control" name="email" value="{{ $editDetails->email }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="cellno">Cell Number :</label>
            <input type="text" class="form-control" name="cellno" value="{{ $editDetails->cellno }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="address">Residential Address :</label>
            <input type="textarea" rows="3" columns="3" class="form-control" name="address" value="{{ $editDetails->address }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="city">City :</label>
            <input type="text" class="form-control" name="city" value="{{ $editDetails->city }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="country">Country :</label>
            <input type="text" class="form-control" name="country" value="{{ $editDetails->country }}"/>
        </div>

          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection