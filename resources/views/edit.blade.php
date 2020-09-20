@extends('layout')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Choose wishlist you want to edit</h1>
        </div>
    @foreach($wishlist as $item)
        <div class="col-sm-6 pt-4">
            <div class="card mb-3 dark-color-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <img class="img w-50" src="/storage/images/{{ $item->thumbnail_name }}">
                </div>
                <a href="/mywishlist/editbyid/{{ $item->id }}" class="btn btn-dark">Edit this wishlist</a>
            </div>
        </div>
        @endforeach
        </div>

@endsection
