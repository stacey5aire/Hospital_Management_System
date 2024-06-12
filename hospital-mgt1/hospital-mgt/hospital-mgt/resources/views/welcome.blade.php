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
<<<<<<< HEAD
<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
=======
    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>
                        </div>
>>>>>>> 37f03ff94311aaa24d9afcddfdd21bca101ca736
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

<<<<<<< HEAD
<<<<<<< HEAD
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

            <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
=======
<<<<<<< HEAD
=======
>>>>>>> d0fd0e35113c8a2c7e1ebe65ea5d3677b6dee8d5
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>

                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
<<<<<<< HEAD
=======
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
>>>>>>> 37f03ff94311aaa24d9afcddfdd21bca101ca736
                    </div>
                    <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                </div>
            </form>

<<<<<<< HEAD
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctor') }}">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary ml-lg-3">
                            Register
                        </a>
                        @endif
                    </li>
                    <li>
                        <a href="{{ route('login') }}" class="btn btn-primary ml-lg-3">
                            Log in
                        </a>
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
<div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">Let's make your life happier</span>
            <h1 class="display-4">Healthy Living</h1>
            <a href="#" class="btn btn-primary">Let's Consult</a>
=======
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
>>>>>>> 5d96f54be2d3340f2c77c08bd6fe5e6526e3a95f
=======


>>>>>>> d0fd0e35113c8a2c7e1ebe65ea5d3677b6dee8d5
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('doctor') }}">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news') }}">News</a>
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
<div class = "alert alert-success">
    <button type = "button" class = "close" data-dismiss = "alert">x</button>
    {{ session()->get('message') }}
</div>
@endif

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Healthy Living</h1>
                <a href="#" class="btn btn-primary">Let's Consult</a>
            </div>
>>>>>>> 37f03ff94311aaa24d9afcddfdd21bca101ca736
        </div>
    </div>
</div>


<<<<<<< HEAD
<div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card-service wow fadeInUp">
                        <div class="circle-shape bg-secondary text-white">
                            <span class="mai-chatbubbles-outline"></span>
=======
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
                        <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
                        <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/bg-doctor.png" alt="">
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
                            <img src="../assets/img/doctors/doctor_1.jpg" alt="{{ $doc->name }}">
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

    <div class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest News</h1>
            <div class="row mt-5">
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="../assets/img/blog/blog_1.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_1.jpg" alt="">
                                    </div>
                                    <span>Roger Adams</span>
                                </div>
                                <span class="mai-time"></span> 1 week ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="../assets/img/blog/blog_2.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_1.jpg" alt="">
                                    </div>
                                    <span>Roger Adams</span>
                                </div>
                                <span class="mai-time"></span> 4 weeks ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-2 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="../assets/img/blog/blog_3.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
                            <div class="site-info">
                                <div class="avatar mr-2">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_2.jpg" alt="">
                                    </div>
                                    <span>Diego Simmons</span>
                                </div>
                                <span class="mai-time"></span> 2 months ago
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center mt-4 wow zoomIn">
                    <a href="{{ route('news') }}" class="btn btn-primary">Read More</a>
<<<<<<< HEAD
=======
            <h1 class="mb-5 text-center wow fadeInUp">Our Doctors</h1>

            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="../assets/img/doctors/doctor_1.jpg" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="mb-0 text-xl">Dr. Stein Albert</p>
                            <span class="text-sm text-grey">Cardiology</span>
>>>>>>> 37f03ff94311aaa24d9afcddfdd21bca101ca736
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
<<<<<<< HEAD
=======
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="mb-0 text-xl">Dr. Rebecca Steffany</p>
                            <span class="text-sm text-grey">General Health</span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="mb-0 text-xl">Dr. Rebecca Steffany</p>
                            <span class="text-sm text-grey">General Health</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section bg-light">
        <div class="container">
            <h1 class="text-center wow fadeInUp">Latest News</h1>
            <div class="mt-5 row">
                <div class="py-2 col-lg-4 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="../assets/img/blog/blog_1.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus
                                    case</a></h5>
                            <div class="site-info">
                                <div class="mr-2 avatar">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_1.jpg" alt="">
                                    </div>
                                    <span>Roger Adams</span>
                                </div>
                                <span class="mai-time"></span> 1 week ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 col-lg-4 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="../assets/img/blog/blog_2.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the
                                    pandemic</a></h5>
                            <div class="site-info">
                                <div class="mr-2 avatar">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_1.jpg" alt="">
                                    </div>
                                    <span>Roger Adams</span>
                                </div>
                                <span class="mai-time"></span> 4 weeks ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-2 col-lg-4 wow zoomIn">
                    <div class="card-blog">
                        <div class="header">
                            <div class="post-category">
                                <a href="#">Covid19</a>
                            </div>
                            <a href="blog-details.html" class="post-thumb">
                                <img src="../assets/img/blog/blog_3.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much
                                    sugar?</a></h5>
                            <div class="site-info">
                                <div class="mr-2 avatar">
                                    <div class="avatar-img">
                                        <img src="../assets/img/person/person_2.jpg" alt="">
                                    </div>
                                    <span>Diego Simmons</span>
                                </div>
                                <span class="mai-time"></span> 2 months ago
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4 text-center col-12 wow zoomIn">
                    <a href="blog.html" class="btn btn-primary">Read More</a>
>>>>>>> 5d96f54be2d3340f2c77c08bd6fe5e6526e3a95f
=======
>>>>>>> d0fd0e35113c8a2c7e1ebe65ea5d3677b6dee8d5
                </div>

>>>>>>> 37f03ff94311aaa24d9afcddfdd21bca101ca736
            </div>
        </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
        <div class="container">
<<<<<<< HEAD
=======
            <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

            <form class="main-form" action="{{url('appointment')}}" method="POST">

                @csrf

                <div class="row mt-5 ">
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                        <input type="text" name="name" class="form-control" placeholder="Full name">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                        <input type="text"  name="email" class="form-control" placeholder="Email address..">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                        <input type="date" name="date" class="form-control">
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="doctor" id="departement" class="custom-select">
                            <option>Select doctor</option>

                            @foreach($doctor as $doctors)

                            <option value="{{$doctors->name}}">{{$doctors->name}} **Speciality** {{$doctors->speciality}}</option>

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
    </div>

    <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
        <div class="container py-5 py-lg-0">
>>>>>>> 37f03ff94311aaa24d9afcddfdd21bca101ca736
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Welcome to Your Health <br> Center</h1>
                    <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
                    <a href="about.html" class="btn btn-primary">Learn More</a>
                </div>
<<<<<<< HEAD
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="../assets/img/bg-doctor.png" alt="">
                    </div>
=======
                <div class="col-lg-8 wow fadeInRight">
                    <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
                    <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
                    <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
>>>>>>> 37f03ff94311aaa24d9afcddfdd21bca101ca736
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->
</div> <!-- .bg-light -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/doctor_1.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. Stein Albert</p>
                        <span class="text-sm text-grey">Cardiology</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/doctor_2.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                        <span class="text-sm text-grey">Dental</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                        <span class="text-sm text-grey">General Health</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                        <span class="text-sm text-grey">General Health</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                        <span class="text-sm text-grey">General Health</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Latest News</h1>
        <div class="row mt-5">
            <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                            <a href="#">Covid19</a>
                        </div>
                        <a href="blog-details.html" class="post-thumb">
                            <img src="../assets/img/blog/blog_1.jpg" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <div class="avatar-img">
                                    <img src="../assets/img/person/person_1.jpg" alt="">
                                </div>
                                <span>Roger Adams</span>
                            </div>
                            <span class="mai-time"></span> 1 week ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                            <a href="#">Covid19</a>
                        </div>
                        <a href="blog-details.html" class="post-thumb">
                            <img src="../assets/img/blog/blog_2.jpg" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <div class="avatar-img">
                                    <img src="../assets/img/person/person_1.jpg" alt="">
                                </div>
                                <span>Roger Adams</span>
                            </div>
                            <span class="mai-time"></span> 4 weeks ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 py-2 wow zoomIn">
                <div class="card-blog">
                    <div class="header">
                        <div class="post-category">
                            <a href="#">Covid19</a>
                        </div>
                        <a href="blog-details.html" class="post-thumb">
                            <img src="../assets/img/blog/blog_3.jpg" alt="">
                        </a>
                    </div>
                    <div class="body">
                        <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
                        <div class="site-info">
                            <div class="avatar mr-2">
                                <div class="avatar-img">
                                    <img src="../assets/img/person/person_2.jpg" alt="">
                                </div>
                                <span>Diego Simmons</span>
                            </div>
                            <span class="mai-time"></span> 2 months ago
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center mt-4 wow zoomIn">
                <a href="blog.html" class="btn btn-primary">Read More</a>
            </div>

        </div>
    </div>
</div> <!-- .page-section -->

<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form">
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" placeholder="Full name">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" placeholder="Email address..">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="departement" id="departement" class="custom-select">
                        <option value="general">General Health</option>
                        <option value="cardiology">Cardiology</option>
                        <option value="dental">Dental</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopaedics">Orthopaedics</option>
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" class="form-control" placeholder="Number..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div> 

<div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
        <div class="row align-items-center">
            <div class="col-lg-4 wow zoomIn">
                <div class="img-banner d-none d-lg-block">
                    <img src="../assets/img/mobile_app.png" alt="">
                </div>
            </div>
            <div class="col-lg-8 wow fadeInRight">
                <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
                <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
                <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
            </div>
        </div>
    </div>
</div> <!-- .banner-home -->

@include('user.include.footer')

<script src="{{asset('assets')}}/js/jquery-3.5.1.min.js"></script>

<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>

<script src="{{asset('assets')}}/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="{{asset('assets')}}/vendor/wow/wow.min.js"></script>

<script src="{{asset('assets')}}/js/theme.js"></script>

</body>
</html>