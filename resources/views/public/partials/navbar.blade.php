<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <!-- Container -->
    <div class="container">
        <!-- Toggle button -->
        <button
            class="navbar-toggler mb-3"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="{{ url(app()->getLocale() . '/') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="Mazoon Aluminum Logo" height="40"><br>
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/') }}">{{ __('navbar.home') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('navbar.products') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item"
                               href="{{ url(app()->getLocale() . '/mazoon45') }}">{{ __('navbar.mazoon45') }}</a></li>
                    </ul>
                </li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/about') }}">{{ __('navbar.about') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/contact') }}">{{ __('navbar.contact') }}</a>
                </li>
            </ul>

            @auth
                <!-- Notifications (for mobile view) -->
                <ul class="navbar-nav d-lg-none">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkMobile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkMobile">
                            <li><a class="dropdown-item" href="#">Some news</a></li>
                            <li><a class="dropdown-item" href="#">Another news</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Avatar (for mobile view) -->
                <ul class="navbar-nav d-lg-none">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdownMenuAvatarMobile"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <img
                                src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                class="rounded-circle"
                                height="25"
                                alt="Portrait of a Man"
                            />
                        </a>
                        <ul
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdownMenuAvatarMobile"
                        >
                            <li><a class="dropdown-item" href="#">My profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Cart Icon (for mobile view) -->
                <ul class="navbar-nav d-lg-none">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
        </div>
        <!-- Collapsible wrapper -->
        @endauth

        @guest
            <!-- Sign In and Sign Up for mobile view -->
            <ul class="navbar-nav d-lg-none w-100 border-top border-danger mt-5 pb-2 bg-white">
                <li class="nav-item w-100 border-info text-center">
                    <a class="nav-link border border-info" href="{{--{{ route('login') }}--}}">Sign In</a>
                </li>
                <li class="nav-item w-100 text-center">
                    <a class="nav-link" href="{{--{{ route('register') }}--}}">Sign Up</a>
                </li>


            </ul>
        @endguest

        <!-- Right elements (for desktop view) -->
        @auth
            <div class="d-none d-lg-flex align-items-center">
                <!-- Icon -->
                <a class="text-reset me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <!-- Notifications -->
                <div class="dropdown">
                    <a
                        class="text-reset me-3 dropdown-toggle hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="fas fa-bell"></i>
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li><a class="dropdown-item" href="#">Some news</a></li>
                        <li><a class="dropdown-item" href="#">Another news</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <!-- Avatar -->
                <div class="dropdown">
                    <a
                        class="dropdown-toggle d-flex align-items-center hidden-arrow"
                        href="#"
                        id="navbarDropdownMenuAvatar"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <img
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                            class="rounded-circle"
                            height="25"
                            alt="Portrait of a Man"
                        />
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuAvatar"
                    >
                        <li><a class="dropdown-item" href="{{ url(app()->getLocale() . '/profile') }}">My profile</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        {{--<form method="POST" action="{{ url(app()->getLocale() . '/logout') }}">
                            @csrf
                        <li><a class="dropdown-item" href="{{ url(app()->getLocale() . '/logout') }}">Logout</a></li>
                        </form>--}}
                        <li>
                            <form method="POST" action="/en/logout">
                                @csrf
                                <button class="dropdown-item" type="submit">Logout</button>
                            </form>
                        </li>


                    </ul>
                </div>
            </div>
        @endauth
        @guest
            <div class="d-flex align-items-center">
                <a href="{{ url(app()->getLocale() . '/login') }}" class="btn btn-outline-danger me-2">
                    Login
                </a>
                <a href="{{ url(app()->getLocale() . '/register') }}" class="btn btn-warning">
                    Register
                </a>
              {{--  <button type="button" class="btn btn-primary me-3">
                    Sign up
                </button>--}}
              {{--  <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2"><a href="{{ url(app()->getLocale() . '/login') }}">Login</a> </button>
                    <a type="button" class="btn btn-primary"><a href="{{ url(app()->getLocale() . '/register') }}"></a>Register</a></button>--}}
                </div>


        @endguest
        <!-- Right elements -->
    </div>
    <!-- Container -->
</nav>
<!-- Navbar -->
