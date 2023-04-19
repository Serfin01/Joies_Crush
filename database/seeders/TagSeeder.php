<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Tag;
use App\Models\TagType;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type_color = TagType::where('name','color')->first();
        $type_shape = TagType::where('name','shape')->first();
        $type_lock = TagType::where('name','lock')->first();
        $type_material = TagType::where('name','material')->first();
        $type_size = TagType::where('name','size')->first();

        // COLORS
        Tag::factory()->create([
            'name'=>'vermell',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'vermell ataronjat',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'taronja',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'groc',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'verd llima',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'verd',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'cian',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'blau clar',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'blau',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'blau fosc',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'rosa',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'fúcsia',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'blanc',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'negre',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'gris',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'marró',
            'tag_type_id'=>$type_color->id,
        ]);

        // (possible nou tipus?)
        Tag::factory()->create([
            'name'=>'gargot blanc',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'gargot negre',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'barres blanques',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'punts blancs',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'punts grocs',
            'tag_type_id'=>$type_color->id,
        ]);
        Tag::factory()->create([
            'name'=>'línies blanques',
            'tag_type_id'=>$type_color->id,
        ]);

        // SHAPES
        Tag::factory()->create([
            'name'=>'forma d\'imant',
            'tag_type_id'=>$type_shape->id,
        ]);
        Tag::factory()->create([
            'name'=>'cercle',
            'tag_type_id'=>$type_shape->id,
        ]);
        Tag::factory()->create([
            'name'=>'quadrat',
            'tag_type_id'=>$type_shape->id,
        ]);
        Tag::factory()->create([
            'name'=>'rombe',
            'tag_type_id'=>$type_shape->id,
        ]);
        Tag::factory()->create([
            'name'=>'rectangle',
            'tag_type_id'=>$type_shape->id,
        ]);
        Tag::factory()->create([
            'name'=>'cor',
            'tag_type_id'=>$type_shape->id,
        ]);
        Tag::factory()->create([
            'name'=>'gota',
            'tag_type_id'=>$type_shape->id,
        ]);
        Tag::factory()->create([
            'name'=>'forma d\'arbre',
            'tag_type_id'=>$type_shape->id,
        ]);
        Tag::factory()->create([
            'name'=>"forma de flor",
            'tag_type_id'=>$type_shape->id,
        ]);
        Tag::factory()->create([
            'name'=>"rosa (flor)",
            'tag_type_id'=>$type_shape->id,
        ]);

        // MATERIALS
        Tag::factory()->create([
            'name'=>'acer hipoalergènic',
            'tag_type_id'=>$type_material->id,
        ]);
        Tag::factory()->create([
            'name'=>'metall',
            'tag_type_id'=>$type_material->id,
        ]);

        // LOCKS
        Tag::factory()->create([
            'name'=>'de ganxo',
            'tag_type_id'=>$type_lock->id,
        ]);
        Tag::factory()->create([
            'name'=>'de botó',
            'tag_type_id'=>$type_lock->id,
        ]);

        // SIZES
        Tag::factory()->create([
            'name'=>'gran',
            'tag_type_id'=>$type_size->id,
        ]);
        Tag::factory()->create([
            'name'=>'mitjà',
            'tag_type_id'=>$type_size->id,
        ]);
        Tag::factory()->create([
            'name'=>'petit',
            'tag_type_id'=>$type_size->id,
        ]);
    }
}
