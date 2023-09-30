<div class="container-fluid bg-light border-bottom">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ url(app()->getLocale() . '/') }}">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" width="80">
            </a>

            <!-- Toggle button for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url(app()->getLocale() . '/') }}">{{ __('navbar.home') }}</a>
                    </li>
                    {{--Start Prduct Menue and Submenus--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ __('navbar.products') }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url(app()->getLocale() . '/mazoon45') }}">{{ __('navbar.mazoon45') }}</a></li>
                            {{--<li><a class="dropdown-item" href="--}}{{--{{ url(app()->getLocale() . '/mazoon60') }}--}}{{--">{{ __('navbar.mazoon60') }}</a></li>
                            <li><a class="dropdown-item" href="--}}{{--{{ url(app()->getLocale() . '/mazooncw') }}--}}{{--">{{ __('navbar.mazooncw') }}</a></li>--}}
                        </ul>
                    </li>
                    {{--End Prduct Menue and Submenus--}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url(app()->getLocale() . '/about') }}">{{ __('navbar.about') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ url(app()->getLocale() . '/contact') }}">{{ __('navbar.contact') }}</a>
                    </li>
                </ul>

                <!-- Language Switcher -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li><a class="dropdown-item" href="{{ url('language/en') }}">English</a></li>
                            <li><a class="dropdown-item" href="{{ url('language/ar') }}">Arabic</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
