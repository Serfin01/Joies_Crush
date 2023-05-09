<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;

class PaymentController extends Controller
{
    public function show()
    {
        return view('products.pay');
    }
    public function checkout($userId)
    {
        $cart = CartItem::where('user_id', $userId)->get(); 
    
        foreach ($cart as $item) {
            $product = Product::find($item->product_id);
            $product->stock -= $item->quantity;
            $product->save();
        }

        CartItem::where('user_id', $userId)->delete();
        
        return view('pendientes');
    }
}
