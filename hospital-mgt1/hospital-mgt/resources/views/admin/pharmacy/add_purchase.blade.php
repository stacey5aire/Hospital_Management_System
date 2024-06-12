@extends('admin.master')

@section('content')
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center card-title">Record Purchase</h3>
            <form class="form-sample">
                <p class="card-description"> Order Details </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Medicine Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Medicine ID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Quantity</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Vendor</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Payment Status</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>Paid</option>
                                    <option>Pending</option>
                                    <option>Failed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Delivery Status</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>Delivered</option>
                                    <option>Pending</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>


                {{-- <p class="card-description"> Created At </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="datetime-local" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="text-end">
                    <a href="{{ route('admin.pharmaceutical')}}">
                        <button type="submit" class="btn btn-light">Cancel</button>
                    </a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
