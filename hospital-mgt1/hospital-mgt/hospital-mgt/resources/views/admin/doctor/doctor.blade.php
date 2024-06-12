@extends('admin.master')

@section('content')

<div class="p-2 text-end align-right">
    <a href="{{ route('admin.add.doctor') }}">
        <button class="btn btn-primary">Add New Doctor +</button>
    </a>
</div>

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Employed Doctors</h4>
            {{-- <p class="card-description"> Add class <code>.table-{color}</code> --}}
            </p>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-contextual">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Doctor Name</th>
                            <th>Phone</th>
                            <th>Speciality </th>
                            <th>Room No</th>
                            <th>Fees</th>
                            <th>Working Hours</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($doctorList as $doctor)
                        <tr>
                            <td> {{ $doctor->id }} </td>
                            <td> {{ $doctor->name }}</td>
                            <td> {{ $doctor->phone }} </td>
                            <td> {{ $doctor->speciality }}</td>
                            <td> {{ $doctor->room }}</td>
                            <td> {{ $doctor->fee }} </td>
                            <td> {{ $doctor->time }} </td>
                            <td>
                                <a href="{{ route('admin.edit.doctor', ['id' => $doctor->id]) }}">
                                    <button class="btn btn-info">Edit</button>
                                </a>

                                <a href="{{ route('admin.delete.doctor', ['id' => $doctor->id]) }}">
                                    <button class="btn btn-danger">Delete</button>
                                </a>

                            </td>
                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
