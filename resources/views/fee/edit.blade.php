@extends('layout')

@section('content')

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
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
    Edit Student Fee Details
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
      <form method="post" action="{{ route('fees.update', $editFeeDetails->id ) }}">

        <div class="form-group">
          @method('PATCH')
          <label for="regno">Registration Number :</label>
          <input type="text" class="form-control" name="regno" value="{{ $editFeeDetails->regno }}"/>
      </div>


          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="firstname">First Name :</label>
              <input type="text" class="form-control" name="firstname" value="{{ $editFeeDetails->firstname }}"/>
          </div>

          <div class="form-group">
            @method('PATCH')
            <label for="lastname">Last Name :</label>
            <input type="text" class="form-control" name="lastname" value="{{ $editFeeDetails->lastname }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')


            <label for="class">Class</label>

            <select class="custom-select" id="inputGroupSelect01" name="class">
              <option hidden selected value="{{ $editFeeDetails->class }}">{{ $editFeeDetails->class }}</option>
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
            <input type="text" class="form-control" name="section" value="{{ $editFeeDetails->section }}"/>
        </div>

        {{-- <div class="form-group">
            @method('PATCH')
            <label for="month">Month :</label>
            <input type="text" class="form-control" name="month" value="{{ $editFeeDetails->month }}"/>
        </div> --}}

        <div class="form-group">
          @method('PATCH')
          <label for="month">Month :</label>

            <select  name="month" class="custom-select" id="inputGroupSelect01">
              <option hidden selected value="{{ $editFeeDetails->month }}">{{ $editFeeDetails->month }}</option>
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
            <label for="year">Year :</label>
            <input type="text" class="form-control" name="year" value="{{ $editFeeDetails->year }}"/>
        </div>
        <div class="form-group">
          @method('PATCH')
          <label for="tutionfee">Tution Fee :</label>
          <input id="first" type="text" class="form-control" name="tutionfee" value="{{ $editFeeDetails->tutionfee }}"/>
      </div>
      <div class="form-group">
        @method('PATCH')
        <label for="annualfee">Annual Fee :</label>
        <input id="second" type="text" class="form-control" name="annualfee" value="{{ $editFeeDetails->annualfee }}"/>
    </div>

        <div class="form-group">
            @method('PATCH')
            <label for="totalfee">Total Fee :</label>
            <input id="answer" type="text" class="form-control" name="totalfee" value="{{ $editFeeDetails->totalfee }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="feepaid">Amount Paid :</label>
            <input id="val" type="text" class="form-control" name="feepaid" value="{{ $editFeeDetails->feepaid }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')
            <label for="balancefee">Balance :</label>
            <input id="diff" type="text" class="form-control" name="balancefee" value="{{ $editFeeDetails->balancefee }}"/>
        </div>

        <div class="form-group">
            @method('PATCH')

            <label for="feestatus">Fee Status</label>
            <select class="custom-select" id="inputGroupSelect01" name="feestatus">
                <option hidden selected value="{{ $editFeeDetails->feestatus }}">{{ $editFeeDetails->feestatus }}</option>
                <option value="Paid">Paid</option>
                <option value="Unpaid">Unpaid</option>
              </select>
        </div>



          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>


<script>

  function add(){
  var a,b,c;
  a=Number(document.getElementById("first").value);
  b=Number(document.getElementById("second").value);
  c= a + b;
  document.getElementById("answer").value= c;
  }
  
  function subtract(){
  var a,b,c;
  a=Number(document.getElementById("answer").value);
  b=Number(document.getElementById("val").value);
  c= a - b;
  document.getElementById("diff").value= c;
  }
  </script>

@endsection