<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Purchase;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PurchaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $first_user = User::first();
        return [
            'user_id' => $first_user->id,
            'payment_date' => now(),
            'price' => 0.0,
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
