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
                        <a class="nav-link" style="background-color:#87D5AB; color:white"  href="{{ route('myappointments') }}">Appointments</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logoutuser') }}" method="POST" style="display: none;">
                            @csrf
                            <!-- You can add a button or an anchor tag to trigger the form submission -->
                            <button type="submit">Logout</button>
                        </form>

                        <!-- This link/button will trigger the form submission -->
                        <a href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                    </li>

                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>