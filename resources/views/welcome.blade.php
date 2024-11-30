@extends('layouts.app')
@section('content')
    <!-- Hero Starts  -->
    <section class="hero">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('images/img-1.1.jpg') }}" class="w-100 d-block" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Welcome to House.com</h3>
                        <p>
                            We are commited to giving you your dream house.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/img-2.2.jpg') }}" class="w-100 d-block" alt="Second slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/img-1.jpg') }}" class="w-100 d-block" alt="Third slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Title</h3>
                        <p>Description</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    <!-- Hero Ends  -->


    <!-- Latest Starts -->
    <section class="my-5">
        <div class="container">
            <h2 class="mb-5">Latest Properties</h2>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/img-1.1.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/img-1.1.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/img-1.1.jpg') }}" alt="Title" />
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Ends -->


    <!-- About Starts -->
    <section class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('images/img-2.2.jpg') }}" class="w-100" alt="">
                </div>
                <div class="col-md-6 mb-3">
                    <h2 class="mb-3">About House.com</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam iusto officiis, deserunt
                        rerum culpa, similique quidem explicabo a aspernatur nobis nemo odit architecto dolor!
                        Voluptates, fugiat molestias dolor provident autem excepturi velit illo inventore eum impedit
                        qui ex vitae porro nobis dolores esse magnam quidem? Id nostrum a labore voluptatum.
                    </p>

                    <ul>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </li>
                        <li>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </li>
                    </ul>

                    <a href="#"> Read More </a>
                </div>
            </div>
        </div>
    </section>
    <!-- About Ends -->
@endsection
