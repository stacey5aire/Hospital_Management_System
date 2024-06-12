@extends('admin.master')

@section('content')
<h3 class="card-title">Purchased Medicines Status</h3>
<div class="p-2 text-end align-right">
    <a href="{{ route('admin.add.purchase') }}">
        <button class="btn btn-primary">Add A Purchase Receipt</button>
    </a>
</div>

<div class="col-lg-12 stretch-card" style="min-height: 28em">
    <div class="card">
        <div class="card-body">
            <div class="text-end mb-2">
                <input type="text" id="searchInput" placeholder="Search Table">
            </div>
            <div class="table-responsive">
                <table id="pharmacyTable" class="table table-bordered table-hover table-contextual">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Medicine Name</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th>Vendor</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $totalquantity = 0;
                        $totalprice = 0;
                        ?>
                        @foreach ($pharmacies as $pharmacy)
                        <tr>
                            <td>{{ $pharmacy->id }}</td>
                            <td>{{ $pharmacy->name }}</td>
                            <td>{{ $pharmacy->code }}</td>
                            <td>{{ $pharmacy->description }}</td>
                            <td>{{ $pharmacy->vendor }}</td>
                            <td>{{ number_format($pharmacy->price, 2) }}</td>
                            <td>{{ number_format($pharmacy->quantity) }}</td>
                            <td>{{ number_format($pharmacy->price * $pharmacy->quantity, 2) }}</td>
                            <td>{{ $pharmacy->date }}</td>
                            <?php
                            $totalquantity += $pharmacy->quantity;
                            $price = $pharmacy->price * $pharmacy->quantity;
                            $totalprice += $price;
                            ?>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="6"></td>
                            <td>Total Quantity: {{ number_format($totalquantity) }}</td>
                            <td>Total Price: {{ number_format($totalprice, 2) }}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var searchInput = document.getElementById("searchInput");
        var table = document.getElementById("pharmacyTable");
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
