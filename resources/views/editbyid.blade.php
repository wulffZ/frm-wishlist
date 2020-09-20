@extends('layout')

@section('content')

    <div class="row">
        <div class="col my-4 p-4 dark-color-4">
            <h2>Edit an existing wishlist</h2>
            <form action="{{ url('/mywishlist/edit') }}" method="POST" enctype="multipart/form-data" class="disabled-textbox-form">
                {{ csrf_field() }}


                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" id="name" value="{{ $wishlist[0]->name }}" class="form-control dark-color-3" />
                </div>

                <div class="form-group">
                    <label>Reupload your image (mandatory)</label>
                    <input type="file" name="image" class="form-control dark-color-3 p-1">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" id="description" value="{{ $wishlist[0]->description }}" class="form-control dark-color-3" />
                </div>

                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" id="price" value="{{ $wishlist[0]->price }}" class="form-control dark-color-3" />
                </div>

                <div class="form-group">
                    <label>Link to product</label>
                    <input type="text" name="product_link" id="product_link" value="{{ $wishlist[0]->product_link }}" class="form-control dark-color-3" />
                </div>



                <input type="hidden" id="formHiddenCover" name="coverUrl" value="">

                <div class="form-group">
                    <button class="btn btn-dark btn-lg float-right" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
