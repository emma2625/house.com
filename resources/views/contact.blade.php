@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card mx-auto" style="max-width: 700px;">
                        <div class="card-body">
                            <form action="{{ route('contact.send') }}" method="POST">
                                @csrf

                                <div class="mb-2">
                                    <h1 class="text-center">Get in touch with us</h1>
                                </div>

                                <div class="mb-2">
                                    <label for="" class="form-label">Full Name</label>
                                    <input type="text" name="full_name" class="form-control">
                                    @error('full_name')
                                        <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <label for="" class="form-label">Location</label>
                                    <select name="location" class="form-select">
                                        <option>Lagos</option>
                                        <option>Abuja</option>
                                    </select>
                                    @error('location')
                                        <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="mb-2">
                                    <label for="" class="form-label">Message</label>
                                    <textarea rows="5" name="message" class="form-control"></textarea>
                                    @error('message')
                                        <small class="text-danger"> {{ $message }} </small>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <img src="{{ asset('images/img-2.2.jpg') }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>
@endsection
