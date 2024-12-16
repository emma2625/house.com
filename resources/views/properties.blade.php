@extends('layouts.app')
@section('content')
    <!-- Hero Starts  -->
    <section class="hero">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('images/img-1.1.jpg') }}" class="w-100 d-block" alt="First slide" />
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Check out our listings</h1>
                       
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Hero Ends  -->


    <!-- Latest Starts -->
    <section class="my-5">
        <div class="container">
            <h2 class="mb-5">Latest Properties</h2>

            <div class="row">
                @forelse ($properties as $property)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <a href="{{ route('listing.view.page', $property->id) }}" class="card nav-link position-relative">
                            <img class="card-img-top" src="{{ asset($property->picture) }}" alt="Title"
                                style="height: 20rem;" />
                            <div class="card-body">
                                <h4 class="card-title"> {{ $property->name }} </h4>
                                <p class="border p-2 rounded position-absolute top-0 end-0 m-1 text-bg-success">
                                    {{ $property->category->name }}
                                </p>

                                <h5 class="fw-bold">
                                    ₦ {{ number_format($property->price, 2) }}
                                </h5>

                                @if ($property->status == 'sale')
                                    <span class="badge text-bg-warning"> For Sale </span>
                                @else
                                    <span class="badge text-bg-primary"> For Rent </span>
                                @endif

                            </div>
                        </a>
                    </div>
                @empty
                    <p> No Record Found </p>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Latest Ends -->
@endsection
