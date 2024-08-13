<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::all();
        return response()->json($wishlists);
    }

    public function show($id)
    {
        $wishlist = Wishlist::find($id);
        return response()->json($wishlist);
    }

    public function store(Request $request)
    {
        $wishlist = Wishlist::create($request->all());
        return response()->json($wishlist, 201);
    }

    public function update(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);
        $wishlist->update($request->all());
        return response()->json($wishlist);
    }

    public function destroy($id)
    {
        Wishlist::find($id)->delete();
        return response()->json(null, 204);
    }
}
