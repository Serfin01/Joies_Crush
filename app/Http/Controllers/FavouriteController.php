<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class FavouriteController extends Controller
{
    public function addById(Request $request, string $product_id)
    {
        $product = Product::find($product_id);
        if (Auth::user()->favourites->contains($product_id)) {
            Auth::user()->favourites()->detach($product);
        } else {
            Auth::user()->favourites()->attach($product);
        }
        return response()->json([
            'msg' => "Added product {$product_id} to favourites."
        ], 200);
    }
}
