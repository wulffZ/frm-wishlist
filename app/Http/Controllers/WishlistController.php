<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index() {
        $wishlists = Wishlist::all();
        return view('wishlist', compact('wishlists'));
    }

    public function mywishlistIndex() {
       return view('mywishlist');
    }

    public function mywishlistCreateIndex(Request $request) {
        return view('create');
    }

    public function mywishlistCreatePost(Request $request) {

        $image = $request->file('image');

        $fileExtension = $image->getClientOriginalExtension();

        $file_name = Str::random(10);

            $wishlist = new Wishlist();
            $wishlist->user_id = Auth::id();
            $wishlist->name = $request->name;
            $wishlist->thumbnail_name = $file_name . '.' . $fileExtension;
            $wishlist->description = $request->description;
            $wishlist->price = $request->price;
            $wishlist->product_link = $request->product_link;

            $wishlist->save();

            $image->storeAs('/images', "$wishlist->thumbnail_name", 'public');

            return redirect('/');
    }

    public function mywishlistEditIndex(Request $request) {
        $user_id = Auth::id();
        $wishlist = Wishlist::where('user_id', $user_id)->get();
        return view('edit', compact('wishlist'));
    }

    public function mywishlistEditById ($id) {
        $wishlist = Wishlist::where('id', $id)->get();
        return view('editbyid', compact('wishlist'));
    }

    public function mywishlistEditPost(Request $request) {
        $user_id = Auth::id();
        $existingWishlist = Wishlist::where('user_id', $user_id)->latest()->first();

        $image = $request->file('image');

        $fileExtension = $image->getClientOriginalExtension();

        $file_name = Str::random(10);

        $wishlist = $existingWishlist;
        $wishlist->user_id = Auth::id();
        $wishlist->name = $request->name;
        $wishlist->thumbnail_name = $file_name . '.' . $fileExtension;
        $wishlist->description = $request->description;
        $wishlist->price = $request->price;
        $wishlist->product_link = $request->product_link;

        $wishlist->save();

        $image->storeAs('/images', "$wishlist->thumbnail_name", 'public');

        return redirect('/');
    }

    public function mywishlistDeleteIndex(Request $request) {
        $user_id = Auth::id();
        $wishlist = Wishlist::where('user_id', $user_id)->get();
        return view('delete', compact('wishlist'));
    }

    public function mywishlistDeleteById($id) {
        $wishlist = Wishlist::where('id', $id)->delete();
        return redirect('/');
    }
}
