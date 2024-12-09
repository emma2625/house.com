@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <h1>All Properties</h1>
            <div class="text-end mb-4">
                <a href="{{ route('properties.create') }}" class="btn btn-primary">
                    New Property
                </a>
            </div>

            <div class="row">
                @forelse ($properties as $property)
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card position-relative">
                            <img class="card-img-top" src="{{ asset($property->picture) }}" alt="Title"
                                style="height: 20rem;" />
                            <div class="card-body">
                                <h4 class="card-title"> {{ $property->name }} </h4>
                                <p class="border p-2 rounded position-absolute top-0 end-0 m-1 text-bg-success">
                                    {{ $property->category->name }}
                                </p>

                                @if ($property->status == 'sale')
                                    <span class="badge text-bg-warning"> For Sale </span>
                                @else
                                    <span class="badge text-bg-primary"> For Rent </span>
                                @endif

                                <div class="mt-4 border-top pt-2">
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="" class="d-inline">
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p> No Record Found </p>
                @endforelse

            </div>
        </div>
    </section>
@endsection
