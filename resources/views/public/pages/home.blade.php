@extends('public.layouts.app')

@section('title', __('navbar.home'))

@section('hero')
    <div class="container-fluid bg-primary">
        <div class="container text-white">
            <div class="row">
                <!-- Image box on the left -->
                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center py-3">
                    <img src="{{ asset('images/hero/hero_home.png') }}" class="img-fluid rounded-1 custom-hero-image" alt="Hero Mazoon Aluminum">

                </div>
                <!-- Text box on the right -->
                <div class="col-12 col-md-7">
                    <div class="p-3">
                        <h1 class="fw-bold text-white">{{ __('home.title') }}</h1>
                        <h2>{{ __('home.body') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection

        @section('content')
            <div class="text-center container py-3">
                <h1 class="display-4 fw-bold text-body-emphasis">{{ __('hero.title') }} </h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">{{ __('hero.body') }}</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                        <a href="{{ url(app()->getLocale() . '/about') }}">
                            <button type="button"
                                    class="btn btn-primary btn-lg px-4 me-sm-3">{{ __('hero.link') }}</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container">
                <p class="desc text-center lead">{{ __('home.h1_lead') }} <a target="_blank" class="link-dark"
                                                                             href="https://www.napcooman.com/">{{ __('home.h1_lead_link') }}</a>
                </p>
                <img src="{{ asset('images/hero/hero-gray.jpg') }}" class="img-fluid rounded-3 mb-4"
                     alt="Hero Mazoon Aluminum">
            </div>

            <div class="container-fluid bg-light py-3">
                <div class="container px-4">
                    <h2 class="pb-2 border-bottom">{{ __('home.h1') }}</h2>

                    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
                        <div class="col d-flex flex-column align-items-start gap-2 py-3">
                            <h2 class="fw-bold text-body-emphasis">{{ __('home.h1_lead') }}</h2>
                            <a target="_blank" href="https://www.napcooman.com/"
                               class="btn btn-primary btn-lg">{{ __('home.h1_lead_link') }}</a>
                        </div>

                        <div class="container-fluid">
                            <div class="col">
                                <div class="row row-cols-1 row-cols-sm-2 g-4">
                                    <div class="col d-flex flex-column gap-2">
                                        <div class="text-bg-primary bg-gradient rounded-3">
                                            <h4 class="text-center">{{ __('home.f1') }}</h4>
                                        </div>
                                        <p class="text-body-secondary">{{ __('home.f1p') }}</p>
                                    </div>

                                    <div class="col d-flex flex-column gap-2">
                                        <div class="text-bg-primary bg-gradient rounded-3">
                                            <h4 class="text-center">{{ __('home.f2') }}</h4>
                                        </div>
                                        <p class="text-body-secondary">{{ __('home.f2p') }}</p>
                                    </div>

                                    <div class="col d-flex flex-column gap-2">
                                        <div class="text-bg-primary bg-gradient rounded-3">
                                            <h4 class="text-center">{{ __('home.f3') }}</h4>
                                        </div>
                                        <p class="text-body-secondary">{{ __('home.f3p') }}</p>
                                    </div>

                                    <div class="col d-flex flex-column gap-2">
                                        <div class="text-bg-primary bg-gradient rounded-3">
                                            <h4 class="text-center">{{ __('home.f4') }}</h4>
                                        </div>
                                        <p class="text-body-secondary">{{ __('home.f4p') }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="container px-4 py-5">
                    <div class="row g-4 py-5">

                        <div class="col-lg-3 d-flex flex-column gap-2">
                            <div class="text-bg-primary bg-gradient rounded-3">
                                <h4 class="text-center">{{ __('home.f5') }}</h4>
                            </div>
                            <p class="text-body-secondary">{{ __('home.f5p') }}</p>
                        </div>

                        <div class="col-lg-3 d-flex flex-column gap-2">
                            <div class="text-bg-primary bg-gradient rounded-3">
                                <h4 class="text-center">{{ __('home.f6') }}</h4>
                            </div>
                            <p class="text-body-secondary">{{ __('home.f6p') }}</p>
                        </div>

                        <div class="col-lg-3 d-flex flex-column gap-2">
                            <div class="text-bg-primary bg-gradient rounded-3">
                                <h4 class="text-center">{{ __('home.f7') }}</h4>
                            </div>
                            <p class="text-body-secondary">{{ __('home.f7p') }}</p>
                        </div>

                        <div class="col-lg-3 d-flex flex-column gap-2">
                            <div class="text-bg-primary bg-gradient rounded-3">
                                <h4 class="text-center">{{ __('home.f8') }}</h4>
                            </div>
                            <p class="text-body-secondary">{{ __('home.f8p') }}</p>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    <div class="container-fluid bg-light">
    <div class="container py-3">
        <h1 class="border-bottom">{{ __('navbar.products') }}</h1>
        <div class="row mb-5">
            <div class="col-md-6">
                <img src="{{ asset('images/products/mazoon45/mazoon_product_1.png') }}" class="img-fluid rounded" alt="Product Image">
            </div>
            <div class="col-md-6">
                <h1>{{ __('mazoon45.title') }}</h1>
                <p class="lead">
                    {{--Catchy tagline or sentence about the product.--}}
                    {{ __('mazoon45.lead') }}
                </p>
                <h3>{{ __('mazoon45.title') }}</h3>
                <p>{{ __('mazoon45.description') }}
                    <a href="{{ url(app()->getLocale() . '/mazoon45') }}">
                        {{ __('home.h1_lead_link') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
    </div>



    {{--<section class="services py-5">
        <div class="container">
            <h2 class="section-title text-center mb-4">Our Policy</h2>
            <p class="desc text-center mb-5">We take care of the customer from the first stage until maintenance
                is done
                as
                soon as possible</p>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 anim-slideFromBottom">
                    <div class="media">
                        <i class="fa fa-file fa-3x me-3"></i>
                        <div class="media-body">
                            <h4 class="media-heading">QUOTATION PRICE</h4>
                            <p>We use Ra Workshop software to provide the customer with a clear price quote and
                                design
                                before signing the agreement.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 anim-slideFromBottom">
                    <div class="media">
                        <i class="fa fa-bookmark-o fa-3x me-3"></i>
                        <div class="media-body">
                            <h4 class="media-heading">SIGNING THE AGREEMENT</h4>
                            <p>We sign the agreement after the customer approves the quotation, the quotation is
                                attached to
                                the agreement.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 anim-slideFromBottom">
                    <div class="media">
                        <i class="fa fa-pencil-square-o fa-3x me-3"></i>
                        <div class="media-body">
                            <h4 class="media-heading">FINAL MEASUREMENTS</h4>
                            <p>Our experts will visit the site and take final measurements, so we can
                                manufacture them
                                accurately.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 anim-slideFromBottom">
                    <div class="media">
                        <i class="fa fa-cog fa-3x me-3"></i>
                        <div class="media-body">
                            <h4 class="media-heading">MANUFACTURING</h4>
                            <p>We use the Ra Workshop software to obtain a high quality product that is fully
                                compatible
                                with reality</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 anim-slideFromBottom">
                    <div class="media">
                        <i class="fa fa-check-square-o fa-3x me-3"></i>
                        <div class="media-body">
                            <h4 class="media-heading">INSTALLATION</h4>
                            <p>From our experience we use two types of silicone, to ensure you the best
                                waterproofing.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 anim-slideFromBottom">
                    <div class="media">
                        <i class="fa fa-refresh fa-3x me-3"></i>
                        <div class="media-body">
                            <h4 class="media-heading">MAINTENANCE</h4>
                            <p>Maintenance is the basis of quality, so we give it the greatest attention by
                                following
                                the
                                customer through customer service programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}


    {{--    <div class="col-12 home_bottom" style="margin-top: 120px;">--}}
    {{--        <h2 class="sub_title border-bottom border-danger">REFERENCES</h2>--}}
    {{--        <div class="clearfix"></div>--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <a href="https://web.archive.org/web/20190413171453/http://www.kaban.com.tr/" target="_blank"--}}
    {{--               class="mx-3 my-2"><img--}}
    {{--                    src="/web/20190413171453im_/https://www.apex-win.com/img/reference/kaban.png" style="width: 200px;"></a>--}}
    {{--            <a href="https://web.archive.org/web/20190413171453/http://www.firatpen.com.tr/" target="_blank"--}}
    {{--               class="mx-3 my-2"><img src="/web/20190413171453im_/https://www.apex-win.com/img/reference/firatpen.png"--}}
    {{--                                      style="width: 200px;"></a>--}}
    {{--            <a href="https://web.archive.org/web/20190413171453/http://www.fornax.com.tr/" target="_blank"--}}
    {{--               class="mx-3 my-2"><img src="/web/20190413171453im_/https://www.apex-win.com/img/reference/fornax.png"--}}
    {{--                                      style="width: 200px;"></a>--}}
    {{--            <a href="https://web.archive.org/web/20190413171453/https://www.g-u.com/" target="_blank" class="mx-3 my-2"><img--}}
    {{--                    src="/web/20190413171453im_/https://www.apex-win.com/img/reference/G-U.png"--}}
    {{--                    style="width: 200px;"></a>--}}
    {{--            <a href="https://web.archive.org/web/20190413171453/https://www.hoppe.com/" target="_blank"--}}
    {{--               class="mx-3 my-2"><img src="/web/20190413171453im_/https://www.apex-win.com/img/reference/hoppe.png"--}}
    {{--                                      style="width: 200px;"></a>--}}
    {{--            <a href="https://web.archive.org/web/20190413171453/http://www.pyramid.ro/" target="_blank"--}}
    {{--               class="mx-3 my-2"><img--}}
    {{--                    src="/web/20190413171453im_/https://www.apex-win.com/img/reference/PyramidSoftware.jpg"--}}
    {{--                    style="width: 200px;"></a>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection
