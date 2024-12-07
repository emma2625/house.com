@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Categories</h1>

                    <div class="text-end mb-4">
                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">
                            New Category
                        </a>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Last Updated</th>
                                    <th scope="col">...</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr class="">
                                        <td scope="row"> {{ $category->name }} </td>
                                        <td> {{ $category->created_at->format('M. jS Y h:i a') }} </td>
                                        <td> {{ $category->updated_at->diffForHumans() }} </td>
                                        <td>
                                            <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>

                                            <form 
                                                action="{{ route('admin.category.destroy', $category->id) }}" 
                                                method="POST" 
                                                onsubmit="return confirm('Are you sure?')"
                                                class="d-inline-block">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">No Record Found</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
