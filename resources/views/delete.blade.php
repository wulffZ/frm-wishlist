@extends('layout')

@section('content')

    <div class="row">
        <div class="col pt-4">
            <div class="card dark-color-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $wishlist->name }}</h5>
                    <p class="card-text">{{ $wishlist->description }}</p>
                    <img class="img-thumbnail" src="/storage/images/{{ $wishlist->thumbnail_name }}">
                    <a href="{{ $wishlist->product_link }}" class="btn dark-color-1 button-fade--white">Product link</a>
                </div>
            </div>
            <a href="/mywishlist/deletecurrent" class="btn btn-dark btn-lg float-right mt-2 mb-2" type="submit">Delete</a>
        </div>
    </div>


@endsection
