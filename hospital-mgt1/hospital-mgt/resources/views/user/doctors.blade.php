@extends('user.master')
@section('content')

@if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
    {{ session()->get('message') }}
</div>
@endif

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
        <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <ol class="py-0 mb-2 bg-transparent breadcrumb breadcrumb-dark justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                </ol>
            </nav>
            <h1 class="font-weight-normal">Our Doctors</h1>
        </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="row">

                    @foreach($doctor as $doc)
                    <div class="py-3 col-md-6 col-lg-4 wow zoomIn">
                        <div class="card-doctor">
                            <div class="header">
                                <img src="../assets/img/doctors/{{ $doc->image }}" alt="{{ $doc->name }}">
                                <div class="meta">
                                    <a href="#"><span class="mai-call"></span></a>
                                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                                </div>
                            </div>
                            <div class="body">
                                <p class="mb-0 text-xl">{{ $doc->name }}</p>
                                <span class="text-sm text-grey">{{ $doc->speciality }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form" action="{{url('appointment')}}" method="POST">

            @csrf

            <div class="mt-5 row ">
                <div class="py-2 col-12 col-sm-6 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address..">
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="py-2 col-12 col-sm-6 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select">
                        <option>Select doctor</option>

                        @foreach($doctor as $doctors)

                        <option value="{{$doctors->name}}">{{$doctors->name}} **Speciality** {{$doctors->speciality}}
                        </option>

                        @endforeach
                    </select>
                </div>
                <div class="py-2 col-12 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="number" class="form-control" placeholder="Number..">
                </div>
                <div class="py-2 col-12 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6"
                        placeholder="Enter message.."></textarea>
                </div>
            </div>

            <button type="submit" class="mt-3 btn btn-primary wow zoomIn">Submit Request</button>
        </form>
    </div> <!-- .container -->
</div> <!-- .page-section -->




@endsection