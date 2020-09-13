@extends('layout')

@section('content')

    @foreach($wishlists as $wishlist)
        <div class="row">
            <div class="col pt-4">
                <div class="card mb-3 dark-color-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $wishlist->name }}</h5>
                        <p class="card-text">{{ $wishlist->description }}</p>
                        <img class="img w-50" src="/storage/images/{{ $wishlist->thumbnail_name }}">
                    </div>
                    <a href="{{ $wishlist->product_link }}" class="btn btn-dark">Product link</a>
                </div>
            </div>
        </div>
    @endforeach


@endsection
