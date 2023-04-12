<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'=>'admin',
            'email'=>'admin@joiescrush.com',
            'password'=>Hash::make('1234567890'),
            'role_id'=>'1',
            'remember_token'=>Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        User::factory()->create(20);
    }
}
