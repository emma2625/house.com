@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5 py-5">
            <div class="card mx-auto" style="max-width: 600px">
                <div class="card-body">
                    <h4 class="card-title">Create Category</h4>

                    <form action="{{ route('admin.category.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" class="form-control" autofocus>
                        @error('name')
                            <span class="small text-danger fw-bold"> {{ $message }} </span>
                        @enderror
                        <div class="text-center my-3">
                            <button class="btn btn-primary px-5">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
