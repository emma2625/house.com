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
@endsection