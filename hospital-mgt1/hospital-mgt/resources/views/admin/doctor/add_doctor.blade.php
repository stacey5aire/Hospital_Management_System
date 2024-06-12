@extends('admin.master')

@section('content')

<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center card-title">Add Doctor</h3>
            <form class="form-sample" action="{{ route('admin.add.new.doctor') }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                <p class="card-description"> Personal info </p>
                <div class="row">
                    {{-- <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="id">ID</label>
                            <div class="col-sm-9">
                                <input type="text" name="id" id="id" class="form-control" />
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="name">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" required name="name" id="name" class="text-white form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="gender">Gender</label>
                            <div class="col-sm-9">
                                <select name="gender" required id="gender" class="text-white form-control">
                                    <option selected>Male</option>

                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="email">Email</label>
                            <div class="col-sm-9">
                                <input type="email" required name="email" required id="email"
                                    class="text-white form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="phone">Phone</label>
                            <div class="col-sm-9">
                                <input type="tel" required name="phone" required id="phone"
                                    class="text-white form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="dob">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" name="dob" id="dob" class="text-white form-control"
                                    placeholder="dd/mm/yyyy" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="speciality">Speciality</label>
                            <div class="col-sm-9">
                                <select name="speciality" required id="speciality" class="text-white form-control">
                                    <option>Surgeon</option>
                                    <option>Dentist</option>
                                    <option>Optician</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
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
                    </div> --}}
                </div>
                <p class="card-description"> Address </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="address">Address </label>
                            <div class="col-sm-9">
                                <input type="text" required name="address" id="address"
                                    class="text-white form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="state">State</label>
                            <div class="col-sm-9">
                                <input type="text" required name="state" id="state" class="text-white form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="working_time">Working Time</label>
                            <div class="col-sm-9">
                                <input type="text" required name="working_time" id="working_time"
                                    class="text-white form-control"
                                    pattern="^(0?[1-9]|1[0-2]):[0-5][0-9] (am|pm) - (0?[1-9]|1[0-2]):[0-5][0-9] (am|pm)$"
                                    placeholder="Format 10:00 am - 3:00 pm" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="working_days">Working Days</label>
                            <div class="col-sm-9">
                                <input type="text" required name="working_days" id="working_days"
                                    class="text-white form-control" placeholder="Monday, Tuesday" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="room">Room</label>
                            <div class="col-sm-9">
                                <input type="text" required name="room" id="room" class="text-white form-control"
                                    placeholder="100" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="membership">Membership</label>
                            <div class="col-sm-9">
                                <input type="text" required name="membership" id="membership" class="form-control"
                                    placeholder="Full time or Part time" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="description">Description</label>
                            <div class="col-sm-9">
                                <textarea placeholder="About the doctor..." required name="description" id="description"
                                    class="text-white form-control" cols="30" rows="30"></textarea>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="contact">Contact</label>
                            <div class="col-sm-9">
                                <input type="text" required name="contact" id="contact"
                                    class="text-white form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="fee">Fee</label>
                            <div class="col-sm-9">
                                <input type="text" required name="fee" id="fee" class="text-white form-control" />
                            </div>
                        </div>
                    </div>
                </div>

                <p>Other Files</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="image">Image</label>
                            <div class="col-sm-9">
                                <input type="file" required name="image" id="image"
                                    class="col-span-2 row-span-2 text-white form-control" />
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

@endsection