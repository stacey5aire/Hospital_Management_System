@extends('admin.master')

@section('content')
<h3 class="card-title">Purchased Medicines Status</h3>
<div class="p-2 text-end align-right">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add A
        Purchase Receipt</button>
</div>

<div class="col-lg-12 stretch-card" style="min-height: 18em">
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

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-sample" method="POST" action="{{ route('admin.pharmacy.purchase')}}">
                    @csrf
                    <p class="card-description"> Order Details </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="username">User Name</label>
                                <div class="col-sm-9">
                                    <select id="username" name="username" class="form-control">
                                        <option selected></option>
                                        @foreach ($doctors as $doctor )
                                        <option>
                                            {{ $doctor->name." (ID->)".$doctor->id }}
                                        </option>



                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="quantity">Quantity</label>
                                <div class="col-sm-9">
                                    <input type="text" name="quantity" id="quantity" required class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="medicine">Medicine Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="medicine" name="medicine" required class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="medic_id">Medicine ID</label>
                                <div class="col-sm-9">
                                    <input type="text" id="medic_id" name="medic_id" required class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="price">Price</label>
                                <div class="col-sm-9">
                                    <input type="text" id="price" name="price" required class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="vendor">Vendor</label>
                                <div class="col-sm-9">
                                    <input type="text" id="vendor" required name="vendor" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="date">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" id="date" name="date" required class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="payment_status ">Payment Status</label>
                                <div class="col-sm-9">
                                    <select id="payment_status" required name="payment_status" class="form-control">
                                        <option>Paid</option>
                                        <option selected>Pending</option>
                                        <option>Failed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" for="delivery_status">Delivery Status</label>
                                <div class="col-sm-9">
                                    <select id="delivery_status" required name="delivery_status" class="form-control">
                                        <option>Delivered</option>
                                        <option>Pending</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
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
