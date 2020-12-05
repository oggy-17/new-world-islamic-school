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
    <h3> <b>Student Fee Form</b> </h3>

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
      <form method="post" class="" action="{{ route('fees.store') }}">
        <div class="form-group">
            <label for="regno"> Registration Number :</label>
            <input type="number" class="form-control" name="regno"/>
        </div>
  
  
            <div class="form-group">
                @csrf
                <label for="firstname">First Name :</label>
                <input type="text" class="form-control" name="firstname"/>
            </div>
  
            <div class="form-group">
              <label for="lastname">Last Name :</label>
              <input type="text" class="form-control" name="lastname"/>
          </div>
          <div class="form-group">
                <label for="class">Class</label>

              <select  name="class" class="custom-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
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
            <label for="section">Section :</label>
            <input type="text" class="form-control" name="section"/>
        </div>

        {{-- <div class="form-group">
            <label for="month">Month :</label>
            <input type="text" class="form-control" name="month"/>
        </div> --}}

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
            <label for="year">Year :</label>
            <input type="number" class="form-control" name="year"/>
        </div>
        <div class="form-group">
          <label for="tutionfee">Tution Fee :</label>
          <input id="first"  type="number" class="form-control" name="tutionfee"/>
    </div>
    <div class="form-group">
      <label for="annualfee">Annual Fee :</label>
      <input id="second"  type="number" class="form-control" name="annualfee"/>
</div>

        <div class="form-group">
              <label for="totalfee">Total Fee :</label>
              <input id="answer" type="number" class="form-control" name="totalfee" onclick="add()"/>
        </div>
        <div class="form-group">
            <label for="feepaid">Fee Paid :</label>
           <input id="val" type="number" class="form-control" name="feepaid"/>
      </div>
      <div class="form-group">
        <label for="balancefee">Balance :</label>
        <input id="diff" type="number" class="form-control" name="balancefee" onclick="subtract()"/>
  </div>
  <div class="form-group">
    <label for="feestatus">Fee Status</label>
    <select class="custom-select" id="inputGroupSelect01" name="feestatus">
        <option selected>Choose...</option>
        <option value="Paid">Paid</option>
        <option value="Unpaid">Unpaid</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Add Data</button>
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