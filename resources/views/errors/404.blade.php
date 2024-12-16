@extends('layouts.app')
@section('content')

    <section>
        <div class="container my-5 py-5">
            <div class="card border-0 mx-auto bg-transparent shadow" style="max-width: 600px;">

                <img src="{{ asset('images/404 error lost in space.gif') }}" class="w-100" alt="404 Error">

                <div class="text-center mt-3 mb-5">
                    <a href="{{ route('homepage') }}" class="btn btn-outline-success btn-lg"> Go Back home </a>
                </div>
            </div>
        </div>
    </section>
@endsection 