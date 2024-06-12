@extends('admin.master')

@section('content')
<div class="p-2 text-end align-right">
    <!-- <a href="{{ route('admin.patients') }}"> -->
    <!--     <button class="btn btn-primary">Add A Purchase Receipt</button> -->
    <!-- </a> -->
</div>

<div class="col-lg-12 stretch-card" style="min-height: 28em">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Appointments</h4>
            <div class="text-end mb-2">
                <input type="text" id="searchInput" placeholder="Search Table">
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-contextual">
                    <thead>
                        <tr>
                            <th>Patient ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Doctor</th>
                            <th>Doctor ID</th>
                            <th>Date</th>
                            <th>Fee</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Actions
                                <p>(On Appointment)</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $apt)
                        <tr>
                            <td>{{ $apt->id }}</td>
                            <td>{{ $apt->name }}</td>
                            <td>{{ $apt->email }}</td>
                            <td>{{ $apt->phone }}</td>
                            <td>{{ $apt->doctor }}</td>
                            <td>{{ $apt->doctor_id }}</td>
                            <td>{{ $apt->date }}</td>
                            <td>{{ $apt->fee }}</td>
                            <td>{{ $apt->message }}</td>
                            <td>{{ $apt->status }}</td>
                            <td>
                                @if ($apt->status == "Approved")
                                <button class="btn btn-danger">Cancel</button>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var searchInput = document.getElementById("searchInput");
        var table = document.querySelector(".table");
        var rows = table.getElementsByTagName("tr");

        searchInput.addEventListener("keyup", function () {
            var filter = searchInput.value.toLowerCase();
            for (var i = 1; i < rows.length; i++) {
                var row = rows[i];
                var cells = row.getElementsByTagName("td");
                var found = false;
                for (var j = 0; j < cells.length; j++) {
                    var cell = cells[j];
                    if (cell) {
                        var textValue = cell.textContent || cell.innerText;
                        if (textValue.toLowerCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }
                }
                if (found) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
        });
    });
</script>
@endsection
