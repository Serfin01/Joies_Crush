<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\TagType;

class TagTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TagType::factory()->create([
            'name'=>'color',
            'description'=>'Tags which define colors.',
        ]);
        TagType::factory()->create([
            'name'=>'shape',
            'description'=>'Tags which define shapes.',
        ]);
        TagType::factory()->create([
            'name'=>'wornwhere',
            'description'=>'Tags which define where a product is worn.',
        ]);
        TagType::factory()->create([
            'name'=>'material',
            'description'=>'Tags which define materials (i.e. steel or plastic).',
        ]);
        TagType::factory()->create([
            'name'=>'lock',
            'description'=>'Tags which define locking mechanisms of products.',
        ]);
        TagType::factory()->create([
            'name'=>'size',
            'description'=>'Tags which define product sizes.',
        ]);
        TagType::factory()->create([
            'name'=>'texture',
            'description'=>'Tags which define a product\'s texture (i.e. smooth, bumpy...).',
        ]);
    }
}
