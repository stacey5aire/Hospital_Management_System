@extends('admin.master')

@section('content')

<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center card-title">Edit Doctor Record</h3>
            <form class="form-sample" action="{{ route('admin.edit.doctor.record') }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                <input type="hidden" name="id" value="{{ $doctorsData[0]->id }}" id="id" class="form-control" />
                <p class="card-description"> Personal info </p>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="name">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="name" value="{{ $doctorsData[0]->name }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="gender">Gender</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="gender">
                                    <option value="Male" @if($doctorsData[0]->gender == 'Male') selected
                                        @endif>Male</option>
                                    <option value="Female" @if($doctorsData[0]->gender == 'Female') selected
                                        @endif>Female</option>

                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="email">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" value="{{ $doctorsData[0]->email }}" id="email"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="phone">Phone</label>
                            <div class="col-sm-9">
                                <input type="tel" name="phone" id="phone" value="{{ $doctorsData[0]->phone }}"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="dob">Date of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" name="dob" id="dob" value="{{ $doctorsData[0]->dob }}"
                                    class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Speciality</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="speciality">
                                    <option value="Surgeon" @if($doctorsData[0]->speciality == 'Surgeon') selected
                                        @endif>Surgeon</option>
                                    <option value="Dentist" @if($doctorsData[0]->speciality == 'Dentist') selected
                                        @endif>Dentist</option>
                                    <option value="Optician" @if($doctorsData[0]->speciality == 'Optician') selected
                                        @endif>Optician</option>
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
                                <input type="text" name="address" value="{{ $doctorsData[0]->address }}" id="address"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="state">State</label>
                            <div class="col-sm-9">
                                <input type="text" name="state" id="state" value="{{ $doctorsData[0]->state }}"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="working_time">Working Time</label>
                            <div class="col-sm-9">
                                <input type="text" name="working_time" value="{{ $doctorsData[0]->time }}"
                                    id="working_time" class="form-control"
                                    pattern="^(0?[1-9]|1[0-2]):[0-5][0-9] (am|pm) - (0?[1-9]|1[0-2]):[0-5][0-9] (am|pm)$"
                                    placeholder="Format 10:00 am - 3:00 pm" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="working_days">Working Days</label>
                            <div class="col-sm-9">
                                <input type="text" name="working_days" value="{{ $doctorsData[0]->day }}"
                                    id="working_days" class="form-control" placeholder="Monday, Tuesday" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="room">Room</label>
                            <div class="col-sm-9">
                                <input type="text" name="room" id="room" value="{{ $doctorsData[0]->room }}"
                                    class="form-control" placeholder="100" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="membership">Membership</label>
                            <div class="col-sm-9">
                                <input type="text" name="membership" id="membership"
                                    value="{{ $doctorsData[0]->membership }}" class="form-control"
                                    placeholder="Full time or Part time" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="description">Description</label>
                            <div class="col-sm-9">
                                <textarea placeholder="About the doctor..." value="{{ $doctorsData[0]->description }}"
                                    name="description" id="description" class="form-control" cols="30"
                                    rows="30"></textarea>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="contact">Contact</label>
                            <div class="col-sm-9">
                                <input type="text" name="contact" value="{{ $doctorsData[0]->phone }}" id="contact"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label" for="fee">Fee</label>
                            <div class="col-sm-9">
                                <input type="text" name="fee" id="fee" value="{{ $doctorsData[0]->fee }}"
                                    class="form-control" />
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
                                <input type="file" name="image" id="image" value="{{ $doctorsData[0]->image }}"
                                    class="col-span-2 row-span-2 form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Save Edit</button>
                </div>
            </form>

        </div>

    </div>
</div>

@endsection
