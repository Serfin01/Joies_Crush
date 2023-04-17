<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_fake14 = User::where('name','fakeuser14')->first();

        $product2 = Product::find(2);
        $product4 = Product::find(4);

        $purchase = Purchase::factory()->create([
            'user_id' => $user_fake14->id,
            'price' => ($product4->price * 3) + ($product2->price),
            'creditcard' => Hash::make(Str::random(10)),
            'payment_date' => now(),
        ]);
        $purchase->products()->attach($product2, ['amount' => 1]);
        $purchase->products()->attach($product4, ['amount' => 3]);
    }
}
