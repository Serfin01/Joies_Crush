<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_loader = Role::where('name', 'loader')->first();
        $user = User::factory()->create([
            'name'=>'admin',
            'email'=>'admin@joiescrush.com',
            'password'=>Hash::make('1234567890'),
            'role_id' => $role_admin->id,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $user = User::factory()->create([
            'name'=>'loader',
            'email'=>'loader@joiescrush.com',
            'password'=>Hash::make('1234567890'),
            'role_id' => $role_loader->id,
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        for ($i=0; $i < 20; $i++) {
            $user = User::factory()->create([
                'name'=>'fakeuser'.$i,
                'email'=> 'user'.$i.'@fake.com',
                'password'=>Hash::make('1234567890'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        //User::factory()->create(20);
    }
}
