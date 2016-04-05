<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('categories')->truncate();

        $type_1 = "External";
        $type_2 = "Internal";

        Category::create([
            'name'  => 'Web Development Competition',
            'price' => 50000,
            'type'  => $type_1
        ]);

        Category::create([
            'name'  => 'Programming Competition (Junior)',
            'price' => 50000,
            'type'  => $type_1
        ]);

        Category::create([
            'name'  => 'Programming Competition (Senior)',
            'price' => 50000,
            'type'  => $type_1
        ]);

        Category::create([
            'name'  => 'Informatics Smart',
            'price' => 30000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Futsal',
            'price' => 100000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Basket',
            'price' => 100000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Badminton (Tunggal)',
            'price' => 20000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Badminton (Ganda)',
            'price' => 25000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Tenis Meja',
            'price' => 20000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Catur',
            'price' => 15000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Dota 2',
            'price' => 50000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'PES 2016',
            'price' => 15000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Counter Strike',
            'price' => 50000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Rubik Cube 3x3',
            'price' => 15000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Desain Logo',
            'price' => 15000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Fotografi',
            'price' => 25000,
            'type'  => $type_2
        ]);

        Category::create([
            'name'  => 'Insta Video',
            'price' => 25000,
            'type'  => $type_2
        ]);

        $this->command->info('Categories Has been Seeded');
    }
}
