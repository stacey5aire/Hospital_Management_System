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
            <h4 class="card-title">Lab Orders</h4>
            <div class="text-end mb-2">
                <input type="text" id="searchInput" placeholder="Search Table">
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Client ID</th>
                            <th>Client Name</th>
                            <th>Order No</th>
                            <th>Test</th>
                            <th>Product Cost</th>
                            <th>Payment Status</th>
                            <th>Date</th>
                            <th>Delivery</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lab_orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->user_id}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->test_id}}-{{$order->id}}{{$order->user_id}}</td>
                            <td>{{$order->test_name}}</td>
                            <td>{{$order->price}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td>{{$order->date}}</td>
                            <td>{{$order->delivery_status}}</td>
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
