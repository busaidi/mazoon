@extends('public.layouts.app')
@section('title', __('navbar.products'))

@section('content')
    <div class="container-fluid px-0">

        <!-- Hero Section with Parallax Effect -->
        <div class="hero bg-primary text-white text-center py-5" style="background-image: url('/images/products/mazoon45/mazoon45_2.jpg'); background-attachment: fixed;">
            <h1>Mazoon 45 Casement System</h1>
            <p class="lead">
                {{--Catchy tagline or sentence about the product.--}}
                Where Design Meets Durability.
            </p>
            {{--<a href="#purchase" class="btn btn-light">Purchase Now</a>--}}
        </div>

        <div class="container mt-5">

            <!-- Testimonials Carousel -->
            {{--<div id="testimonialsCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <blockquote class="blockquote">
                            <p>"This product is amazing!"</p>
                            <footer class="blockquote-footer">John Doe</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote">
                            <p>"I've never seen anything like this!"</p>
                            <footer class="blockquote-footer">Hamed Busaidi</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote">
                            <p>"Truly remarkable craftsmanship!"</p>
                            <footer class="blockquote-footer">John Doe</footer>
                        </blockquote>
                    </div>
                    <!-- Add more testimonials as carousel items... -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>--}}

            <!-- Product Description -->
            <div class="row mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('images/products/mazoon45/mazoon_product_1.png') }}" class="img-fluid rounded" alt="Product Image">
                </div>
                <div class="col-md-6">
                    <h3>Mazoon 45 Casement System</h3>
                    <p>
                        The Mazoon 45 Windows and Doors System embodies a harmonious blend of style and functionality. As a casement system, it's intricately designed to offer contemporary aesthetics seamlessly paired with a robust performance. Precision-engineered and meticulously crafted, each unit promises unmatched durability, easy maintenance, and a sleek appearance that stands out.
                    </p>
                </div>
            </div>

            <!-- Product Features -->
            <div class="row">
                <h3 class="border-bottom p-3">Key Features:</h3>
                <div class="col-md-3 mb-4">
                    <img src="{{ asset('images/products/mazoon45/f2.png') }}" class="img-fluid mb-2" alt="Feature 1">
                    <h5>Triple Sealing EPDM</h5>
                    <p>Equipped with three sealing EPDM, the Mazoon 45 system offers impeccable isolation. This ensures protection against dust, rain leakage, and delivers superior sound insulation, making it a beacon of tranquility in the bustling urban landscape.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <img src="{{ asset('images/products/mazoon45/f1.jpg') }}" class="img-fluid mb-2" alt="Feature 2">
                    <h5>Corner Joint</h5>
                    <p>Precision is key in our design. We employ crimping corner joints for added strength, and each corner is fortified with two alignment corner joints, ensuring perfect alignment and enhanced stability.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <img src="{{ asset('images/products/mazoon45/f1.jpg') }}" class="img-fluid mb-2" alt="Feature 3">
                    <h5>Mullion Connector</h5>
                    <p>Our meticulous approach ensures each mullion connector is securely fastened using two hidden screws. This not only bolsters the structure but also maintains the system's sleek appearance.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <img src="{{ asset('images/products/mazoon45/f1.jpg') }}" class="img-fluid mb-2" alt="Feature 4">
                    <h5>Adaptable Profiles</h5>
                    <p>The Mazoon 45's profiles are uniquely versatile, catering to a variety of architectural needs. Whether you're aiming for an expansive panoramic view or a segmented window layout, our system adapts effortlessly.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
