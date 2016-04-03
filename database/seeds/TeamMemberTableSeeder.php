<?php

use Illuminate\Database\Seeder;
use App\TeamMember;

class TeamMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_members')->truncate();

        $this->command->info('Team Members Has been Seeded');
    }
}
