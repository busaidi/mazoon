@extends('public.layouts.app')

@section('title', __('navbar.home'))

@section('content')
    <div class="my-5">
        <div class="p-5 text-center bg-body-tertiary">
            <div class="container py-5">
                <h1 class="text-body-emphasis">Full-width jumbotron</h1>
                <p class="col-lg-8 mx-auto lead">
                    This takes the basic jumbotron above and makes its background edge-to-edge with a
                    <code>.container</code> inside to align content. Similar to above, it's been recreated with built-in
                    grid and utility classes.
                </p>
            </div>
        </div>
    </div>

    <div class="my-5">
        <div class="p-5 text-center bg-body-tertiary">
            <div class="container py-5">
                <h1 class="text-body-emphasis">Full-width jumbotron</h1>
                <p class="col-lg-8 mx-auto lead">
                    This takes the basic jumbotron above and makes its background edge-to-edge with a
                    <code>.container</code> inside to align content. Similar to above, it's been recreated with built-in
                    grid and utility classes.
                </p>
            </div>
        </div>
    </div>

    <div class="my-5">
        <div class="p-5 text-center bg-body-tertiary">
            <div class="container py-5">
                <h2 class="pb-2 border-bottom">Columns with icons</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <div
                            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#collection"></use>
                            </svg>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>
                        <a href="#" class="icon-link">
                            Call to action
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="feature col">
                        <div
                            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#people-circle"></use>
                            </svg>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>
                        <a href="#" class="icon-link">
                            Call to action
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="feature col">
                        <div
                            class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#toggles2"></use>
                            </svg>
                        </div>
                        <h3 class="fs-2 text-body-emphasis">Featured title</h3>
                        <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another
                            sentence and probably just keep going until we run out of words.</p>
                        <a href="#" class="icon-link">
                            Call to action
                            <svg class="bi">
                                <use xlink:href="#chevron-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
