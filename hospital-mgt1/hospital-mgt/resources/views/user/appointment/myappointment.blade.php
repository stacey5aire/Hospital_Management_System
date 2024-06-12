@extends('user.master')
<!-- @extends('user.appointment.table-component') -->

@section('title')
    My Appointment
@endsection

@section('content')

    <div class="card mb-4" style="background: #e6ffff;">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            My Appointments
        </div>
        <div class="card-body" align="center" style="padding:70px;">
            <table id="datatablesSimple" border="2px" class="table-bordered">
                <thead>
                <tr style="background-color:#545D55">
                    <th style ="padding:10px; font-size:20px; color:white;">Doctor Name</th>
                    <th style ="padding:10px; font-size:20px; color:white;">Date</th>
                    <th style ="padding:10px; font-size:20px; color:white;" style="width: 28.537265% !important;">Message</th>
                    <th style ="padding:10px; font-size:20px; color:white;">Consultant Fee</th>
                    <th style ="padding:10px; font-size:20px; color:white;">Status</th>
                    <th style ="padding:10px; font-size:20px; color:white;">Cancel Appointment</th>
                </tr>
                </thead>

                @foreach ($appoint as $appoints)

                <tbody>
                    <tr style="background-color:#285B2E;" align="center">
                        <td style ="padding:10px; font-size:20px; color:white;">{{$appoints->doctor}}</td>
                        <td style ="padding:10px; font-size:20px; color:white;">{{$appoints->date}}</td>
                        <td style ="padding:10px; font-size:20px; color:white;">{{$appoints->message}}</td>
                        <td style ="padding:10px; font-size:20px; color:white;">{{$appoints->fee}}</td>
                        <td style ="padding:10px; font-size:20px; color:white;">{{$appoints->status}}</td>
                        <td style ="padding:10px; font-size:20px; color:white;">
                            <a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this appointment?')" href="{{url('cancel_appoint', $appoints->id)}}">Cancel</a> 
                        </td>
                        
                    </tr>
                </tbody>

                @endforeach
            </table>
        </div>
    </div>

@endsection
