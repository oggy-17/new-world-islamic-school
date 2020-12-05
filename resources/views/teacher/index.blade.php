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
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table id="datatab" class="table table-striped table-hover table-responsive">
    <thead>
        <tr>
            <td> <strong> Reg. Number</strong></td>
            <td><strong>Name</strong></td>
            <td><strong>Father/Husband Name</strong></td>
            <td><strong>Subject</strong></td>
            <td><strong>DOJ</strong></td>
            <td><strong>E-mail</strong></td>
            <td><strong>Cell Number</strong></td>
            <td><strong>Address</strong></td>
            <td><strong>City</strong></td>
            <td><strong>Country</strong></td>
            <td><strong>Salary</strong></td>
            <td><strong>Show</strong></td>
            <td><strong>Edit</strong></td>
            <td><strong>Delete</strong></td>
        </tr>
    </thead>
    <tbody>
        @foreach($teachersData as $teacherData)
        <tr>
            <td>{{$teacherData->regno}}</td>
            <td>{{$teacherData->name}}</td>
            <td>{{$teacherData->guardianname}}</td>
            <td>{{$teacherData->subject}}</td>
            <td>{{$teacherData->doj}}</td>
            <td>{{$teacherData->email}}</td>
            <td>{{$teacherData->cellno}}</td>
            <td>{{$teacherData->address}}</td>
            <td>{{$teacherData->city}}</td>
            <td>{{$teacherData->country}}</td>
            <td>{{$teacherData->salary}}</td>
            <td><a href="{{ route('faculty.show', $teacherData->id)}}" class="btn btn-success">Show</a></td>
            <td><a href="{{ route('faculty.edit', $teacherData->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('faculty.destroy', $teacherData->id)}}" method="post">
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
      $('#datatab').DataTable();
  } );

</script>

@endpush