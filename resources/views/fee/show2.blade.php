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
</nav>

<style>
    .container{
        margin-top: 5%;
    }
</style>




<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                {{-- <div class="col-md-6">
                    <img src="/project/public/images/logo.png">
                </div> --}}
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        {{-- <img src="/project/public/images/logo.png"> --}}
                        Student Name :<strong> {{$feesDetails->firstname}} {{$feesDetails->lastname}}</strong>
                        <br>
                        Class :<strong> {{$feesDetails->class}}</strong>
                        <br>
                        Month :<strong> {{$feesDetails->month}} </strong>
                        <br>
                        NWIS Number : <strong>0213564789</strong>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em><p id="datetime"></p></em>
                    </p>
                    <p>
                        <em>Fee Reciept ID : <strong> {{$feesDetails->id}}</strong></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Fee Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Structure</th>
                            <th>Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>Tution Fee</em></h4></td>
                            <td class="col-md-1 text-center">{{$feesDetails->tutionfee}}</td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>Annual Fee</em></h4></td>
                            <td class="col-md-1 text-center">{{$feesDetails->annualfee}}</td>

                        </tr>
                        {{-- <tr>
                            <td class="col-md-9"><em>Total Fee</em></h4></td>
                            <td class="col-md-1 text-center">{{$feesDetails->totalfee}}</td>

                        </tr> --}}
                        <tr>


                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <hr>
                            <p>
                                <strong>Fee Paid : </strong>
                            </p>
                            <hr>
                            <p>
                                <strong>Balance Fee : </strong>
                            </p></td>
                             <td class="text-center">
                            <p>
                                <strong>{{$feesDetails->totalfee}}</strong>
                            </p>
                            <hr>
                             <p>
                                <strong>{{$feesDetails->feepaid}}</strong>
                            </p>
                            <hr>
                            <p>
                               <strong>{{$feesDetails->balancefee}}</strong>
                           </p></td>
                        </tr>
                        <tr>


                            <td class="text-right"><h4><strong>Fee Status: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>{{$feesDetails->feestatus}}</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block" onclick="window.print()">
                    Print Now   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function printDiv(container) {
            var printContents = document.getElementById(container).innerHTML;
            w=window.open();
            w.document.write(printContents);
            w.print();
            w.close();
        }


var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>

@endsection


