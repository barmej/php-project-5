<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

//        Brand::query()->create([
//            'image'       => 'img/pexels-guillaume-meurice-2277420.jpg',
//            'name'        => 'Audi',
//            'description' => 'German automobile manufacturer that designs, engineers, produces, markets and distributes luxury vehicles,',
//        ]);
//
//        Brand::query()->create([
//            'image'       => 'img/pexels-roberto-nickson-2526128.jpg',
//            'name'        => 'BMW',
//            'description' => 'Bayerische Motoren Werke AG, abbreviated as BMW, is a German multinational manufacturer of performance luxury vehicles and motorcycles headquartered in Munich, Bavaria, Germany.',
//        ]);
//
//        Brand::query()->create([
//            'image'       => 'img/pexels-photo-6041001.jpeg',
//            'name'        => 'Mercedes',
//            'description' => 'Mercedes-Benz, commonly referred to as Mercedes and sometimes as Benz, is a German luxury and commercial vehicle automotive brand established in 1926. Mercedes-Benz AG is headquartered in Stuttgart, Baden-Württemberg, Germany.',
//        ]);
    }
}
