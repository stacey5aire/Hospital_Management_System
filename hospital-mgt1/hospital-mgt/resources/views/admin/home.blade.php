@extends('admin.master')

@section('content')

<div class="content-wrapper">

    <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Shs. {{number_format($medical_order_expenses[0]->expense, 0,'.',',') }}
                                </h3>
                                {{-- <p class="mb-0 text-success ms-2 font-weight-medium">+3.5%</p> --}}
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Medic Order Expenses</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Shs. {{$doctor_salary_expenses[0]->doctor_expenses}}</h3>
                                <p class="mb-0 text-success ms-2 font-weight-medium">+2%</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Doctors Salary</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">Shs. {{
                                    number_format($total_lab_order_income[0]->total_lab_order_income,0,'.',',') }}</h3>
                                {{-- <p class="mb-0 text-danger ms-2 font-weight-medium">-2.4%</p> --}}
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-danger">
                                <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Total Lab Order Income</h6>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="d-flex align-items-center align-self-start">
                                <h3 class="mb-0">{{ $doctorsCount }}</h3>
                                {{-- <p class="mb-0 text-success ms-2 font-weight-medium">+3.5%</p> --}}
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="icon icon-box-success ">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Expense current</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card corona-gradient-card">
                <div class="px-0 py-0 card-body px-sm-3">
                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Complaints</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="m-0 form-check form-check-muted">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
                                    <th> Name </th>
                                    <th>Email </th>
                                    <th> Subject </th>
                                    <th> Message </th>
                                    <th> Status </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($complaints as $complaint )
                                <tr>
                                    <td>
                                        <div class="m-0 form-check form-check-muted">

                                            @if ($complaint->status == "Action Taken")
                                            {{-- set check to true --}}
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" checked>
                                            </label>
                                            @else
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        {{ $complaint->name }}
                                    </td>
                                    <td>
                                        {{ $complaint->email }}

                                    </td>
                                    <td>
                                        {{ $complaint->subject }}

                                    </td>
                                    <td>
                                        {{ $complaint->message }}

                                    </td>
                                    <td>
                                        @if ($complaint->status == "Action Taken")
                                        <div class="badge badge-outline-success">Action Taken</div>
                                        @else
                                        <div class="badge badge-outline-danger">Pending</div>

                                        @endif

                                    </td>
                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Appointments</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="m-0 form-check form-check-muted">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
                                    <th> Name </th>
                                    <th>Email </th>
                                    <th> Doctor </th>
                                    <th> Fee </th>
                                    <th> Date </th>
                                    <th> Phone </th>
                                    <th> Status </th>
                                    <th> Actions </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment )
                                <tr>
                                    <td>
                                        <div class="m-0 form-check form-check-muted">

                                            @if ($appointment->status == "Completed")
                                            {{-- set check to true --}}
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" checked>
                                            </label>
                                            @else
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        {{ $appointment->name }}
                                    </td>
                                    <td>
                                        {{ $appointment->email }}

                                    </td>
                                    <td>
                                        {{ $appointment->doctor }}

                                    </td>
                                    <td>
                                        {{ $appointment->fee }}

                                    </td>
                                    <td>
                                        {{ $appointment->date }}

                                    </td>
                                    <td>
                                        {{ $appointment->phone }}

                                    </td>
                                    <td>
                                        @if ($appointment->status == "Completed")
                                        <div class="badge badge-outline-success">Completed</div>
                                        @elseif ($appointment->status == "Approved")
                                        <div class="badge badge-outline-info">Approved</div>
                                        @elseif($appointment->status == "Pending")
                                        <div class="badge badge-outline-primary">Pending</div>
                                        @else
                                        <div class="badge badge-outline-danger">Cancelled</div>
                                        @endif

                                    </td>

                                    <td>
                                        @if ($appointment->status !== "Completed")
                                        <a href="{{ route('admin.cancel.appointment', ['id'=>$appointment->id]) }}">
                                            <div class="badge badge-primary">Cancel</div>
                                        </a>
                                        <a href="{{ route('admin.delete.appointment', ['id'=>$appointment->id]) }}">
                                            <div class="badge badge-warning">Delete</div>
                                        </a>
                                        <a
                                            href="{{ route('admin.mark.completed.appointment', ['id'=>$appointment->id]) }}">
                                            <div class="badge badge-info">Mark Completed</div>
                                        </a>
                                        @endif

                                    </td>
                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- content-wrapper ends -->
<!-- partial:partials/_footer.html -->

<!-- partial -->

<script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="../../assets/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../admin/assets/js/off-canvas.js"></script>
<script src="../admin/assets/js/hoverable-collapse.js"></script>
<script src="../admin/assets/js/misc.js"></script>
<script src="../admin/assets/js/settings.js"></script>
<script src="../admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../../assets/js/chart.js"></script>
<!-- End custom js for this page -->
@endsection