@extends('layout')

@section('content')
    <div class="row mt-4">
        <h1>Here you can manage your wishlist. Create a new one, edit or delete an existing one</h1>
        <div class="col-sm-12 pt-2">
            <a class="btn btn-dark btn-lg" href="/mywishlist/create" role="button">Create a new wishlist</a>
        </div>
        <div class="col-sm-12 pt-2">
            <a class="btn btn-dark btn-lg" href="/mywishlist/edit" role="button">Edit an existing wishlist</a>
        </div>
        <div class="col-sm-12 pt-2">
        <a class="btn btn-dark btn-lg" href="/mywishlist/delete" role="button">Delete an existing wishlist</a>
        </div>
    </div>
@endsection
