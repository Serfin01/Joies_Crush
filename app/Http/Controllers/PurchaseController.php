<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener los artículos del carrito para el usuario autenticado
        $cartItems = CartItem::where('user_id', Auth::id())->get();

        // Retornar la vista con los artículos del carrito
        return view('cart', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add(Request $request)
    {
        // Obtener los datos del formulario
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Crear un nuevo artículo en el carrito
        $cartItem = new CartItem;
        $cartItem->product_id = $productId;
        $cartItem->user_id = Auth::id();
        $cartItem->quantity = $quantity;
        $cartItem->price = $product->price;
        $cartItem->save();

        // Redirigir al usuario al carrito de compras
        return redirect('/cart');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Obtener el usuario actual y el producto a agregar al carrito
        $user = auth()->user();
        $product = Product::findOrFail($request->product_id);

        // Verificar si el artículo ya está en el carrito y actualizar la cantidad si es así
        $cartItem = $user->cartItems()->where('product_id', $product->id)->first();
        if ($cartItem) {
            $cartItem->update(['quantity' => $cartItem->quantity + $request->quantity]);
        } else {
            // Si el artículo no está en el carrito, crear un nuevo artículo del carrito para el usuario
            $user->cartItems()->create([
                'product_id' => $product->id,
                'quantity' => $request->quantity,
            ]);
        }

        // Redirigir de vuelta a la página de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'El producto se ha agregado al carrito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Obtener los datos del formulario
        $cartItemId = $request->input('cart_item_id');
        $quantity = $request->input('quantity');

        // Actualizar la cantidad del artículo en el carrito
        $cartItem = CartItem::find($cartItemId);
        $cartItem->quantity = $quantity;
        $cartItem->save();

        // Redirigir al usuario al carrito de compras
        return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function remove(Request $request)
    {
        // Obtener el ID del artículo del carrito a eliminar
        $cartItemId = $request->input('cart_item_id');

        // Eliminar el artículo del carrito
        CartItem::destroy($cartItemId);

        // Redirigir al usuario al carrito de compras
        return redirect('/cart');
    }

}
