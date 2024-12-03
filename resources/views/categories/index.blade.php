@extends('layouts.app')
@section('content')
    <section>
        <div class="container my-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Categories</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Last Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr class="">
                                        <td scope="row"> {{ $category->name }} </td>
                                        <td>Item</td>
                                        <td>Item</td>
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
