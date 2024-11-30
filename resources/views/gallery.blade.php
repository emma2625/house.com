@extends('layouts.main')
@section('content')
    @forelse ($items as $item)
        <li> {{ $item }} </li>
    @empty
        <h3>No item added yet</h3>
    @endforelse
@endsection

