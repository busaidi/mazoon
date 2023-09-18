<div class="container-fluid">
    <div id="myCarousel" class="carousel slide container p-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/slider/dc_421.png') }}" alt="Slide 1 Image" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>{{ __('carousel.headline_1') }}</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slid_2.jpg') }}" alt="Slide 2 Image" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>{{ __('carousel.headline_2') }}</h5>
                    <p>Representative placeholder content for the second slide.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slid_3.jpg') }}" alt="Slide 3 Image" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>{{ __('carousel.headline_3') }}</h5>
                    <p>Representative placeholder content for the third slide.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
