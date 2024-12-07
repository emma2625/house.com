@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5 py-5">
            <div class="card mx-auto" style="max-width: 600px">
                <div class="card-body">
                    <h4 class="card-title">Edit Category</h4>
                    <div class="text-end mb-4">
                        <a href="{{ route('admin.category.index') }}" class="btn btn-primary btn-sm">
                            All Categories
                        </a>
                    </div>
                    <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                        @csrf @method('PATCH')
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control" autofocus>
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
