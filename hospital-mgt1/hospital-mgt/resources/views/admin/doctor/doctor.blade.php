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
            <div class="row mb-3">
                <div class="col-lg-12">
                    <input type="text" class="form-control" id="searchInput" placeholder="Search by name">
                </div>
            </div>

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
                                    <button type="button" class="btn btn-primary edit-doctor"
                                        data-id="{{ $doctor->id }}">
                                        Edit
                                    </button>
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

<!-- Larger Bootstrap 5 Modal -->
<div class="modal fade" id="largerModal" tabindex="-1" aria-labelledby="largerModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="largerModalLabel">Larger Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-9">
                    @csrf
                    <div class="col-md-6">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" value="" id="fullName">
                    </div>
                    <div class="col-md-6">
                        <label for="gender" class="form-label">Gender</label>
                        <select class="form-select" id="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dob">
                    </div>
                    <div class="col-md-6">
                        <label for="speciality" class="form-label">Speciality</label>
                        <select class="form-select" id="speciality">
                            <option selected>Surgeon</option>
                            <option>Dentist</option>
                            <option>Optician</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Membership</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membershipRadios" id="fullTime" checked>
                            <label class="form-check-label" for="fullTime">
                                Full Time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="membershipRadios" id="partTime">
                            <label class="form-check-label" for="partTime">
                                Part Time
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address">
                    </div>
                    <div class="col-md-6">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state">
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#searchInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#doctorTable tbody tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@endsection
