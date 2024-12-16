@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5 py-5">
            <div class="card mx-auto" style="max-width: 900px; position: relative;">
                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <img src="{{ asset($property->picture) }}" class="w-100" alt="">
                        </div>
                        <div class="col-md-7 mb-3">
                            <h1 class="fw-bold">{{ $property->name }}</h1>
                            <h4 class="fw-bold">₦ {{ number_format($property->price, 2) }}</h4>
                            <p class="border p-1 rounded m-1 text-bg-success badge">
                                {{ $property->category->name }}
                            </p>

                            @if ($property->status == 'sale')
                                <span class="badge position-absolute top-0 end-0 mt-2 me-2 text-bg-warning"> For Sale </span>
                            @else
                                <span class="badge position-absolute top-0 end-0 mt-2 me-2 text-bg-primary"> For Rent </span>
                            @endif

                            <p class="mt-3">
                                Location: {{ $property->address }}
                            </p>
                            <p class="mt-1">
                                State: {{ $property->state }}
                            </p>

                            <hr class="mb-4">

                            <article>
                                {{ $property->description }}
                            </article>


                            <div class="mt-5">
                                <a href="{{ route('listing.page') }}" class="btn btn-outline-success">
                                    View All Properties
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
