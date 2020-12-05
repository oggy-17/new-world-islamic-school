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
  </nav>



<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <h3> <b>Faculty Hiring Form</b> </h3>
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
      <form method="post" action="{{ route('faculty.store') }}">
        <div class="form-group">
            <label for="regno">Registration Number :</label>
            <input type="number" class="form-control" name="regno"/>
        </div>
  
  
            <div class="form-group">
                @csrf
                <label for="name">Name :</label>
                <input type="text" class="form-control" name="name"/>
            </div>
  

          <div class="form-group">
            <label for="guardianname">Father/Husband Name :</label>
            <input type="text" class="form-control" name="guardianname"/>
        </div>
        <div class="form-group">
          <label for="subject">Subject :</label>
          <input type="text" class="form-control" name="subject"/>
      </div>
          <div class="form-group">
            <label for="doj">Date of Joining :</label>
            <input type="date" class="date form-control" name="doj"/>
        </div>

        <div class="form-group">
            <label for="email">E-mail :</label>
            <input type="email" class="form-control" name="email"/>
        </div>

        <div class="form-group">
            <label for="cellno">Cell Number :</label>
            <input type="number" class="form-control" name="cellno"/>
        </div>

        <div class="form-group">
            <label for="address">Residential Address :</label>
            <textarea rows="3" columns="3" class="form-control" name="address"></textarea>
        </div>


        <div class="form-group">
            <label for="city">City :</label>
            <input type="text" class="form-control" name="city"/>
        </div>

        <div class="form-group">
              <label for="country">Country :</label>
              <input type="text" class="form-control" name="country"/>
        </div>
        <div class="form-group">
            <label for="salary">Salary Package :</label>
            <input type="number" class="form-control" name="salary"/>
      </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>


<script type="text/javascript">
  $('.date').datepicker({  
     format: 'mm-dd-yyyy'
   });  
</script>

@endsection

