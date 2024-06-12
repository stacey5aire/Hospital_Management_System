<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="text-sm col-sm-8">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
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
            <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

            <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                        aria-describedby="icon-addon1">
                </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

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
                        <a class="nav-link" href="{{ route('news') }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('appointments') }}">Appointments</a>
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