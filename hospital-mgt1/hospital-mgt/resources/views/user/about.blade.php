@extends('user.master')
@section('content')

<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
  <div class="banner-section">
    <div class="container text-center wow fadeInUp">
      <nav aria-label="Breadcrumb">
        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>
      <h1 class="font-weight-normal">About Us</h1>
    </div> <!-- .container -->
  </div> <!-- .banner-section -->
</div> <!-- .page-banner -->

<div class="page-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-4 py-3 wow zoomIn">
        <div class="card-service">
          <div class="circle-shape bg-secondary text-white">
            <span class="mai-chatbubbles-outline"></span>
          </div>
          <p><span>Chat</span> with a doctors</p>
        </div>
      </div>
      <div class="col-md-4 py-3 wow zoomIn">
        <div class="card-service">
          <div class="circle-shape bg-primary text-white">
            <span class="mai-shield-checkmark"></span>
          </div>
          <p><span>One</span>-Health Protection</p>
        </div>
      </div>
      <div class="col-md-4 py-3 wow zoomIn">
        <div class="card-service">
          <div class="circle-shape bg-accent text-white">
            <span class="mai-basket"></span>
          </div>
          <p><span>One</span>-Health Pharmacy</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 wow fadeInUp">
        <h1 class="text-center mb-3">Welcome to Your Health Center</h1>
        <div class="text-lg">
          <p>Welcome to Your Health Center, where your well-being is our priority. At our hospital, we strive to provide exceptional care and support to all our patients. Whether you're visiting us for a routine check-up, seeking treatment for an ailment, or simply looking for guidance on your health journey, our dedicated team of medical professionals is here to assist you every step of the way.</p>

          <p>Our mission is to promote wellness and improve the quality of life for all those we serve. With state-of-the-art facilities, compassionate staff, and a commitment to excellence, we aim to be your trusted partner in health.</p>
          <p>From preventive care to specialized treatments, we offer a comprehensive range of services tailored to meet your unique needs. Our team consists of highly skilled physicians, nurses, and support staff who work together to deliver personalized care with integrity and compassion.</p>
          <p>Thank you for choosing Your Health Center for your healthcare needs. We look forward to serving you and your family with the highest standard of care and professionalism. Your health is our priority, and we're here to help you live your best life.</p>
        </div>
      </div>
      <div class="col-lg-10 mt-5">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
        <div class="row justify-content-center">

          <div class="row">
            @foreach($doctor as $doc)
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
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
    </div>
  </div>
</div>



@endsection