@extends('layout')

@section('content')

    <div class="row">
        <div class="col my-4 p-4 dark-color-4">
            <h2>Edit an existing wishlist</h2>
            <form action="{{ url('/mywishlist/create') }}" method="POST" enctype="multipart/form-data" class="disabled-textbox-form">
                {{ csrf_field() }}


                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" id="name" placeholder="{{ $wishlist->name }}" class="form-control dark-color-3" />
                </div>

                <div class="form-group">
                    <label>The image</label>
                    <input type="file" name="image" class="form-control dark-color-3 p-1">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" id="description" placeholder="{{ $wishlist->description }}" class="form-control dark-color-3" />
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" id="price" placeholder="{{ $wishlist->price }}" class="form-control dark-color-3" />
                </div>

                <div class="form-group">
                    <label>Link to product</label>
                    <input type="text" name="product_link" id="product_link" placeholder="{{ $wishlist->product_link }}" class="form-control dark-color-3" />
                </div>



                <input type="hidden" id="formHiddenCover" name="coverUrl" value="">

                <div class="form-group">
                    <button class="btn btn-dark btn-lg float-right" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
