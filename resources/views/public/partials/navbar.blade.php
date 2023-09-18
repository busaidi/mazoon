<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.svg') }}" alt="Your Company Logo"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/') }}">{{ __('navbar.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/about') }}">{{ __('navbar.about') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/products') }}">{{ __('navbar.products') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/contact') }}">{{ __('navbar.contact') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/blog') }}">{{ __('navbar.blog') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/testimonials') }}">{{ __('navbar.testimonials') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/portfolio') }}">{{ __('navbar.portfolio') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/faq') }}">{{ __('navbar.faq') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/pricing') }}">{{ __('navbar.pricing') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url(app()->getLocale() . '/terms') }}">{{ __('navbar.terms') }}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe"></i> {{ strtoupper(app()->getLocale()) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="{{ url('language/en') }}">English</a>
                        <a class="dropdown-item" href="{{ url('language/ar') }}">عربي</a>
                        <!-- Add more language options here -->
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
