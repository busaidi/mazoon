<div class="container-fluid bg-light">
    <!-- Carousel -->
    <div id="carousel" class="carousel slide container py-3" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/slid_1.jpg') }}" alt="Los Angeles" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>{{ __('carousel.headline_1') }}</h3>
                    <p>{{ __('carousel.paragraph_1') }}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slid_2.jpg') }}" alt="Chicago" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>{{ __('carousel.headline_2') }}</h3>
                    <p>{{ __('carousel.paragraph_2') }}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slid_3.jpg') }}" alt="New York" class="d-block" style="width:100%">
                <div class="carousel-caption">
                    <h3>{{ __('carousel.headline_3') }}</h3>
                    <p>{{ __('carousel.paragraph_3') }}</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>
