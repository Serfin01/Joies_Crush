<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->create([
            'name'=>'admin',
            'description'=>'Manages users and product catalog.',
        ]);
        Role::factory()->create([
            'name'=>'loader',
            'description'=>'Manages product catalog.',
        ]);
        Role::factory()->create([
            'name'=>'user',
            'description'=>'Makes purchases of products.',
        ]);
    }
}
