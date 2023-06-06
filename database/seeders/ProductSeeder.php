<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Tag;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        //RETRIEVE TAGS
        $tag_blanc = Tag::where('name','blanc')->first();
        $tag_vermell = Tag::where('name','vermell')->first();
        $tag_vermell_ataronjat = Tag::where('name','vermell ataronjat')->first();
        $tag_taronja = Tag::where('name','taronja')->first();
        $tag_verdllima = Tag::where('name','verd llima')->first();
        $tag_verd = Tag::where('name','verd')->first();
        $tag_blauclar = Tag::where('name','blau clar')->first();
        $tag_blau = Tag::where('name','blau')->first();
        $tag_blaufosc = Tag::where('name','blau fosc')->first();
        $tag_fucsia = Tag::where('name','fúcsia')->first();
        $tag_gris = Tag::where('name','gris')->first();
        $tag_marro = Tag::where('name','marró')->first();

        $tag_grg_blanc = Tag::where('name','gargot blanc')->first();
        $tag_grg_negre = Tag::where('name','gargot negre')->first();
        $tag_brr_blanc = Tag::where('name','barres blanques')->first();
        $tag_brr_taronja = Tag::where('name','barres taronges')->first();
        $tag_pnt_blanc = Tag::where('name','punts blancs')->first();
        $tag_pnt_groc = Tag::where('name','punts grocs')->first();
        $tag_lin_blanc = Tag::where('name','línies blanques')->first();

        $tag_cercle = Tag::where('name','cercle')->first();
        $tag_cor = Tag::where('name','cor')->first();
        $tag_gota = Tag::where('name','gota')->first();
        $tag_arbre = Tag::where('name',"forma d'arbre")->first();
        $tag_imant = Tag::where('name',"forma d'imant")->first();
        $tag_flor = Tag::where('name',"forma de flor")->first();
        $tag_rosaflor = Tag::where('name',"rosa (flor)")->first();

        $tag_ganxo = Tag::where('name','de ganxo')->first();
        $tag_boto = Tag::where('name','de botó')->first();

        $tag_petit = Tag::where('name','petit')->first();
        $tag_mitja = Tag::where('name','mitjà')->first();
        $tag_gran = Tag::where('name','gran')->first();

        $tag_txt_smooth = Tag::where('name','textura llisa')->first();
        $tag_txt_bars = Tag::where('name','textura amb barres')->first();
        $tag_txt_rough = Tag::where('name','textura rugosa')->first();

        //SEED PRODUCTS
        $product = Product::factory()->create([
            'name' => "John Wick",
            'description' => "Arrecades blaves de ganxo amb dues formes de cercle i arbre",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/2a.jpg",
        ]);
        $product->tags()->attach($tag_blaufosc);
        $product->tags()->attach($tag_grg_blanc);
        $product->tags()->attach($tag_cercle);
        $product->tags()->attach($tag_arbre);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Alisa",
            'description' => "Arrecades vermelles i blanques de ganxo amb dues formes d'imant",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/3d.jpg",
        ]);
        $product->tags()->attach($tag_vermell);
        $product->tags()->attach($tag_blanc);
        $product->tags()->attach($tag_grg_blanc);
        $product->tags()->attach($tag_imant);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_gran);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Nieves",
            'description' => "Arrecades grises de ganxo amb dues formes de cercle i arbre",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/4a.jpg",
        ]);
        $product->tags()->attach($tag_gris);
        $product->tags()->attach($tag_grg_blanc);
        $product->tags()->attach($tag_cercle);
        $product->tags()->attach($tag_arbre);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Vicente",
            'description' => "Arrecades de ganxo amb forma de flor de color vermell ataronjat amb barres blanques",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/editF_2.jpg",
        ]);
        $product->tags()->attach($tag_vermell_ataronjat);
        $product->tags()->attach($tag_brr_taronja);
        $product->tags()->attach($tag_brr_blanc);
        $product->tags()->attach($tag_flor);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_bars);

        $product = Product::factory()->create([
            'name' => "Asunción",
            'description' => "Arrecades de ganxo amb forma de flor de color fúcsia i verd llima",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/editF_3.jpg",
        ]);
        $product->tags()->attach($tag_fucsia);
        $product->tags()->attach($tag_verdllima);
        $product->tags()->attach($tag_pnt_blanc);
        $product->tags()->attach($tag_lin_blanc);
        $product->tags()->attach($tag_flor);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Ignacio",
            'description' => "Arrecades de ganxo amb forma de flor de color blau",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/editF_4.jpg",
        ]);
        $product->tags()->attach($tag_blauclar);
        $product->tags()->attach($tag_blau);
        $product->tags()->attach($tag_grg_negre);
        $product->tags()->attach($tag_lin_blanc);
        $product->tags()->attach($tag_flor);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Evita",
            'description' => "Arrecades de botó amb forma de cor de color vermell i blanc",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_4165.jpg",
        ]);
        $product->tags()->attach($tag_vermell);
        $product->tags()->attach($tag_blanc);
        $product->tags()->attach($tag_cor);
        $product->tags()->attach($tag_boto);
        $product->tags()->attach($tag_petit);
        $product->tags()->attach($tag_txt_rough);

        $product = Product::factory()->create([
            'name' => "Dimas",
            'description' => "Arrecades de ganxo amb forma de cor de color vermell amb punts i gargots blancs",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5847.jpg",
        ]);
        $product->tags()->attach($tag_vermell);
        $product->tags()->attach($tag_grg_blanc);
        $product->tags()->attach($tag_pnt_blanc);
        $product->tags()->attach($tag_cor);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_petit);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Ximen",
            'description' => "Arrecades de ganxo amb forma de gota verda amb una rosa vermella",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5851.jpg",
        ]);
        $product->tags()->attach($tag_verd);
        $product->tags()->attach($tag_vermell);
        $product->tags()->attach($tag_grg_blanc);
        $product->tags()->attach($tag_gota);
        $product->tags()->attach($tag_rosaflor);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_petit);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Martín",
            'description' => "Arrecades de ganxo amb forma d'imant fúcsia amb un cercle i un cor amb punts blancs",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5856.jpg",
        ]);
        $product->tags()->attach($tag_fucsia);
        $product->tags()->attach($tag_pnt_blanc);
        $product->tags()->attach($tag_imant);
        $product->tags()->attach($tag_cercle);
        $product->tags()->attach($tag_cor);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_rough);

        $product = Product::factory()->create([
            'name' => "Pepito",
            'description' => "Arrecades de ganxo amb tres cercles fúcsies",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5864.jpg",
        ]);
        $product->tags()->attach($tag_fucsia);
        $product->tags()->attach($tag_lin_blanc);
        $product->tags()->attach($tag_cercle);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_gran);
        $product->tags()->attach($tag_txt_smooth);
        $product->tags()->attach($tag_txt_rough);

        $product = Product::factory()->create([
            'name' => "Flavio",
            'description' => "Arrecades de ganxo amb forma de flor de color fúcsia amb pètals amb línies blanques",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5870.jpg",
        ]);
        $product->tags()->attach($tag_fucsia);
        $product->tags()->attach($tag_lin_blanc);
        $product->tags()->attach($tag_flor);
        $product->tags()->attach($tag_ganxo);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_smooth);
        $product->tags()->attach($tag_txt_rough);

        $product = Product::factory()->create([
            'name' => "Rocío",
            'description' => "Arrecades de botó amb forma de cor de color vermell",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5876.jpg",
        ]);
        $product->tags()->attach($tag_vermell);
        $product->tags()->attach($tag_cor);
        $product->tags()->attach($tag_boto);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_rough);

        $product = Product::factory()->create([
            'name' => "Adelina",
            'description' => "Arrecades de botó amb forma de cor de color vermell amb gargots negres i una rosa petita",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5883.jpg",
        ]);
        $product->tags()->attach($tag_vermell);
        $product->tags()->attach($tag_grg_negre);
        $product->tags()->attach($tag_cor);
        $product->tags()->attach($tag_rosaflor);
        $product->tags()->attach($tag_boto);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Lino",
            'description' => "Arrecades de botó amb forma de cor de color vermell amb punts blancs i una rosa petita",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5888.jpg",
        ]);
        $product->tags()->attach($tag_vermell);
        $product->tags()->attach($tag_pnt_blanc);
        $product->tags()->attach($tag_cor);
        $product->tags()->attach($tag_rosaflor);
        $product->tags()->attach($tag_boto);
        $product->tags()->attach($tag_mitja);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Manuel",
            'description' => "Arrecades de botó amb 3 gotes fúcsies amb punts grocs, una forma fúcsia amb punts grocs i una forma marró amb gargots blancs",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5951.jpg",
        ]);
        $product->tags()->attach($tag_fucsia);
        $product->tags()->attach($tag_pnt_groc);
        $product->tags()->attach($tag_grg_blanc);
        $product->tags()->attach($tag_gota);
        $product->tags()->attach($tag_boto);
        $product->tags()->attach($tag_gran);
        $product->tags()->attach($tag_txt_smooth);

        $product = Product::factory()->create([
            'name' => "Claudio",
            'description' => "Arrecades de botó amb 3 gotes blaves amb punts grocs, una forma blava amb punts grocs i una forma marró amb gargots blancs",
            'price' => $faker->randomFloat(2, 8, 20),
            'img_url' => "img/fotosSinFiltrar/Catalog arracades/IMG_5960.jpg",
        ]);
        $product->tags()->attach($tag_blau);
        $product->tags()->attach($tag_pnt_groc);
        $product->tags()->attach($tag_grg_blanc);
        $product->tags()->attach($tag_gota);
        $product->tags()->attach($tag_boto);
        $product->tags()->attach($tag_gran);
        $product->tags()->attach($tag_txt_smooth);
    }
}
