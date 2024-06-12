<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('assets')}}/css/maicons.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('assets')}}/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="{{asset('assets')}}/vendor/animate/animate.css">

    <link rel="stylesheet" href="{{asset('assets')}}//css/theme.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="text-sm col-sm-8">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> 0774344558</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span>atlashospital@health.net</a>
                    </div>
                </div>
                <div class="text-sm text-right col-sm-4">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="shadow-sm navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-primary">Atlas</span>-Hospital</a>


            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctor') }}">Doctors</a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary ml-lg-3">
                                Register
                            </a>
                            @endif
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="btn btn-primary ml-lg-3">
                                Log in
                            </a>
                            @endif

                        </li>
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
            </nav>
            </header>

            @if (session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{ session()->get('message') }}
            </div>
            @endif

            <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/empty-hallway-background.jpg);">
                <div class="hero-section">
                    <div class="container text-center wow zoomIn">
                        <span class="subhead">Let's cultivate wellness together</span>
                        <h1 class="display-4">Healthy Living</h1>
                        <a href="#" class="btn btn-primary">Let's Consult</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-secondary text-white">
                            <span class="mai-chatbubbles-outline"></span>
                        </div>
                        <p><span>Chat</span> with a doctors</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-primary text-white">
                            <span class="mai-shield-checkmark"></span>
                        </div>
                        <p><span>One</span>-Health Protection</p>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-accent text-white">
                            <span class="mai-basket"></span>
                        </div>
                        <p><span>One</span>-Health Pharmacy</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Welcome to Your Health <br> Center</h1>
                    <p class="text-grey mb-4">Our dedicated team is here to provide you with exceptional care and support. From routine check-ups to specialized treatments, we're committed to your well-being. Thank you for choosing us for your healthcare needs. Together, let's work towards a healthier you!</p>
                    <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="../assets/img/doctors/doctor_4.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach($doctor as $doc)
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="../assets/img/doctors/{{ $doc->image }}" alt="{{ $doc->name }}">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{ $doc->name }}</p>
                            <span class="text-sm text-grey">{{ $doc->speciality }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form" action="{{url('appointment')}}" method="POST">


            @csrf

            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class="form-control" placeholder="Full name">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address..">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select">

                    <option>Select doctor</option>

                        @foreach($doctor as $doctors)

                        <option value="{{$doctors->name}}">{{$doctors->name}} **Speciality**  {{$doctors->speciality}}</option>
                        
                        @endforeach
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="number" class="form-control" placeholder="Number..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div> <!-- .page-section -->

@include('user.include.footer')

<script src="{{asset('assets')}}/js/jquery-3.5.1.min.js"></script>

<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('assets')}}/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="{{asset('assets')}}/vendor/wow/wow.min.js"></script>

<script src="{{asset('assets')}}/js/theme.js"></script>

</body>

</html>