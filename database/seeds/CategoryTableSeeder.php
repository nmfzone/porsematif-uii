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

        Category::create([
            'name'   => 'Web Development Competition'
        ]);

        Category::create([
            'name'   => 'Programming Competition'
        ]);

        $this->command->info('Categories Has been Seeded');
    }
}
