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
        $user_fake9 = User::where('name','fakeuser9')->first();
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

        $purchase = Purchase::factory()->create([
            'user_id' => $user_fake9->id,
            'price' => ($product2->price * 2 * (0.8)),
            'creditcard' => Hash::make(Str::random(10)),
            'payment_date' => now(),
        ]);
        $purchase->products()->attach($product2, ['amount' => 2, 'discount' => 0.2]);

        $purchase = Purchase::factory()->create([
            'user_id' => $user_fake9->id,
            'price' => ($product4->price * 0.7) + ($product2->price * 2),
            'creditcard' => Hash::make(Str::random(10)),
            'payment_date' => now(),
        ]);
        $purchase->products()->attach($product2, ['amount' => 2]);
        $purchase->products()->attach($product4, ['amount' => 1, 'discount' => 0.3]);
    }
}
