@extends('admin.master')

@section('content')
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center card-title">Edit Doctor's Bio Data Form</h3>
            <form class="form-sample">
                <p class="card-description"> Personal info </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Speciality</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Speciality</label>
                            <div class="col-sm-9">
                                <select class="form-control">
                                    <option selected>Surgeon</option>
                                    <option>Dentist</option>
                                    {{-- <option>Nurse</option> --}}
                                    <option>OPtician</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="membershipRadios"
                                            id="membershipRadios1" value="" checked> Full Time </label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="membershipRadios"
                                            id="membershipRadios2" value="option2"> Part Time </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="card-description"> Address </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">State</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    {{-- <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Postcode</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div> --}}
                </div>

                <p>Other Files</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="col-span-2 row-span-2 form-control" />
                            </div>
                        </div>
                    </div>
                </div>




                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>

    </div>
</div>

@endsection"