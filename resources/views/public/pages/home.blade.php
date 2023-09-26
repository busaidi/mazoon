@extends('public.layouts.app')

@section('title', __('navbar.home'))

@section('hero')
    <div class="container-fluid bg-primary">
        <div class="container mt-5 text-white">
            <div class="row">
                <!-- Bigger box on the left -->
                <div class="col-md-7">
                    <div class="p-3">
                        <h1 class="fw-bold text-white">{{ __('home.title') }}</h1>

                        <h2>{{ __('home.body') }}</h2>
                    </div>
                </div>
                <!-- Smaller box on the right -->
                <div class="col-md-4">
                    <div class="p-3">
                        <img src="{{ asset('images/hero/hero_home.png') }}" width="80%" alt="Hero Mazoon Aluminum" class="img-fluid rounded-5">
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @section('content')
            <div class="text-center container py-3">
                <h1 class="display-4 fw-bold text-body-emphasis">{{ __('hero.title') }}</h1>
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
            <section class="boxes_area">
                <div class="container">
                    <h2 class="section-title text-center">Aluminum Windows And Doors Systems Feature</h2>
                    <p class="desc text-center">we extrouded our aluminum profile from <a target="_blank"
                                                                                          class="link-dark"
                                                                                          href="https://www.napcooman.com/">NAPCO</a>
                        , it has iso certificate</p>
                    <img src="{{ asset('images/hero/hero-gray.jpg') }}" class="img-fluid rounded-3 mb-4"
                         alt="Hero Mazoon Aluminum">

                    <div class="row mt-5">
                        <div class="col-sm-4">
                            <div class="box text-center">
                                <i class="fa fa-cogs fa-3x mb-3"></i>
                                <h3>System</h3>
                                <p>Garnet and Garnet Selective systems, which provides esthetical integrity thanks to
                                    the Oval
                                    Drained Sash profile, has two different drained sash profiles options. Oval drained
                                    sash
                                    profile
                                    has the same ovality with the frame; and another drained sash profile is with
                                    sharper edges,
                                    these are also offered with Garnet 70 system, depending on the customers demand.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="box text-center">
                                <i class="fa fa-shield fa-3x mb-3"></i>
                                <h3>Wind Load Resistance</h3>
                                <p>Garnet 70 systems were designed according to the safety of 3,000 Pa (245 km/h) wind
                                    load
                                    resistance and the strength of 600 Pa (110 km/h) water impermeability and has
                                    successfully
                                    passed these tests. The Garnet Selective Series, which has Class A wall thickness
                                    for
                                    providing
                                    resistance in high wind load structures, offers perfect solutions.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="box text-center">
                                <i class="fa fa-tint fa-3x mb-3"></i>
                                <h3>Water and Air Impermeability</h3>
                                <p>Garnet and Garnet Selective series provides high resistance to water even at high
                                    wind loads,
                                    thanks to its water drainage channels and sets designed to discharge the rainwater
                                    faster
                                    and in
                                    an easier way. The system did not leak any water inside and proved its high quality
                                    under
                                    tests
                                    carried out with 600 Pa (110 km/h) wind load and 4 liters of rainwater per
                                    minute.</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="box text-center">
                                <i class="fa fa-sun-o fa-3x mb-3"></i>
                                <h3>Heat Insulation</h3>
                                <p>Profile widths, chamber numbers, and chamber widths of the system were created to
                                    keep the
                                    heat
                                    and sound insulation at the maximum levels. All profiles of Garnet and Garnet
                                    Selective
                                    system
                                    have a structure of 5 chambers and since the chamber widths are large, low-level
                                    thermal
                                    conductivity coefficient values are provided. Compatible with TS EN ISO 10077-2
                                    standards,
                                    Ug :
                                    0,7 W/m2K, Uw : 1,05 W/m2K and Uf : 1,2 W/m2K values were accomplished with the
                                    windows
                                    system
                                    which has a size of 1,23 m x 1,43 m.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="box text-center">
                                <i class="fa fa-volume-off fa-3x mb-3"></i>
                                <h3>Sound Insulation</h3>
                                <p>One of the most important criteria in window systems is the sound insulation. High
                                    sound
                                    levels
                                    about 70dB in the areas close to airports, railways, or crowded highways are
                                    decreased to
                                    values
                                    under 30 dB at which a child can sleep easily. Sound insulation up to 40 dB value
                                    can be
                                    provided with Garnet 70 series. Therefore, it is possible to create a sound
                                    environment at a
                                    high-quality life level even at the loudest places.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="box text-center">
                                <h3>Example of windows</h3>
                                <img
                                    src="/web/20190413171453im_/https://www.apex-win.com/img/garnet-70-garnet-selective-9.png"
                                    class="img-fluid" style="width: 95%;">
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="services py-5">
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
            </section>


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
