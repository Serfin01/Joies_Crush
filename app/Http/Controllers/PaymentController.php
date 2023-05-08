<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show()
    {
        return view('products.pay');
    }
    public function checkout()
    {
        // Set the API key for Stripe
        Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        // Get the total amount to charge
        $subtotal = 0;
        foreach (auth()->user()->cartItems as $cartItem) {
            $subtotal += $cartItem->quantity * $cartItem->product->price;
        }
        $shipping = ($subtotal >= 35) ? 0 : 15;
        $total = $subtotal + $shipping;
        $amount = $total * 100; // Convert to cents

        // Charge the customer using Stripe
        Charge::create([
            'amount' => $amount,
            'currency' => 'eur',
            'description' => 'Payment for your order',
            'source' => request()->input('stripeToken'),
        ]);

        // Update the status of the cart items
        auth()->user()->cartItems()->update(['status' => 'paid']);

        // Redirect the user to a thank you page
        return redirect()->route('thank-you');
    }
}
