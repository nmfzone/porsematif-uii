<?php

use Illuminate\Database\Seeder;
use App\SiteOption;

class SiteOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('site_options')->truncate();

        $options = [
            [
                "name"  => "favicon",
                "value" => "assets/images/hmtf-uii-logo.jpeg"
            ],
            [
                "name"  => "site_name",
                "value" => "Porsematif 2016"
            ],
            [
                "name"  => "site_url",
                "value" => "http://localhost:8000"
            ],
        ];

        foreach ($options as $option)
        {
            SiteOption::create($option);
        }

        $this->command->info('SiteOptions Has been Seeded');
    }
}
