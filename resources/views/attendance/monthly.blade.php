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


    </div>


</nav>


<style>
  .uper {
    margin-top: 40px;
  }
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
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif





  <table id="datatb" class="table table-striped table-hover table-responsive">
    <thead>
        <tr>

          <td><strong>Select Month</strong></td>


        </tr>
    </thead>
    <tbody>

        <tr>

            <td> <a href="monthOne">January</a>
            <br>
            <a href="monthTwo">February</a>
            <br>
            <a href="monthThree">March</a>
            <br>
            <a href="monthFour">April</a>
            <br>
            <a href="monthFive">May</a>
            <br>
            <a href="monthSix">June</a>
            <br>
            <a href="monthSeven">July</a>
            <br>
            <a href="monthEight">August</a>
            <br>
            <a href="monthNine">September</a>
            <br>
            <a href="monthTen">October</a>
            <br>
            <a href="monthEleven">November</a>
            <br>
            <a href="monthTwelve">December</a>
            <br>
        </td>





        </tr>
        </tbody>
  </table>






@endsection


@push('script')
<script type="text/javascript">


  $(document).ready( function () {
      $('#datatb').DataTable();
  } );

</script>

@endpush