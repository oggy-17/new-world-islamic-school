
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
        <a href="classMont">Montessori</a>
        <a href="classSrMont">Senior Montessori</a>
        <a href="classAdvMont">Advance Montessori</a>
        <a href="class1">1</a>
        <a href="class2">2</a>
        <a href="class3">3</a>
        <a href="class4">4</a>
        <a href="class5">5</a>
        <a href="class6">6</a>
        <a href="class7">7</a>
        <a href="class8">8</a>
        <a href="class9">9</a>
        <a href="class10">10</a>
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








  <table id="datatable" class="table table-striped table-hover table-responsive">
    <thead>
        <tr>

          <td><strong> Reg. Number</strong></td>
          <td> <strong> First Name</strong></td>
          <td><strong>Last Name</strong</td>
          <td><strong>Class</strong</td>
           <td><strong>Section</strong</td>
          <td><strong>Month</strong</td>
          <td><strong>Year</strong</td>
            <td><strong>Tution Fee</strong</td>
              <td><strong>Annual Fee</strong</td>

          <td><strong>Total Fee</strong</td>
          <td><strong>Amount Paid</strong</td>
          <td><strong>Balance</strong</td>
          <td><strong>Status</strong</td>
          <td><strong>Show</strong</td>
          <td><strong>Edit</strong</td>
          <td><strong>Delete</strong</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>

            <td>{{$user->regno}}</td>
            <td>{{$user->firstname}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->class}}</td>
            <td>{{$user->section}}</td>
            <td>{{$user->month}}</td>
            <td>{{$user->year}}</td>
            <td>{{$user->tutionfee}}</td>
            <td>{{$user->annualfee}}</td>
            <td>{{$user->totalfee}}</td>
            <td>{{$user->feepaid}}</td>
            <td>{{$user->balancefee}}</td>
            <td>{{$user->feestatus}}</td>


                 <td> <a href="{{ route('fees.show', $user->id)}}" class="btn btn-success">Show</a></td>
           <td> <a href="{{ route('fees.edit', $user->id)}}" class="btn btn-primary">Edit</a></td>

            <td>   <form action="{{ route('fees.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>






@endsection


@push('script')
<script type="text/javascript">


  $(document).ready( function () {
      $('#datatable').DataTable();
  } );

</script>

@endpush