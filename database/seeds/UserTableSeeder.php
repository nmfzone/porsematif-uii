<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Role;
use App\User;
use App\UserCategory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('user_categories')->truncate();
        DB::table('users')->truncate();

        $webdev         = Category::whereName('Web Development Competition')->first()->id;
        $programming    = Category::whereName('Programming Competition (Senior)')->first()->id;

        $adminRole  = Role::whereName('Admin')->first()->id;
        $userRole   = Role::whereName('User')->first()->id;

        User::create([
            'username'              => 'porsematif_admin',
            'name'                  => 'Administrator',
            'email'                 => 'admin@porsematif.com',
            'password'              => '$!weareporsematif16!$',
            'institution_name'      => 'Universitas Islam Indonesia',
            'institution_address'   => 'Jalan Kaliurang Km. 14.5, Besi, Sleman',
            'role_id'               => $adminRole,
            'status'                => 2,
        ]);

        $uiilabsdev = User::create([
            'username'              => 'uiilabsdev',
            'name'                  => 'UIILabsDev',
            'email'                 => 'uiilabsdev@gmail.com',
            'password'              => 'uiilabsdev',
            'institution_name'      => 'Universitas Islam Indonesia',
            'institution_address'   => 'Jalan Kaliurang Km. 14.5, Besi, Sleman',
            'role_id'               => $userRole,
            'status'                => 1,
        ]);

        UserCategory::create([
            'user_id'       => $uiilabsdev->id,
            'category_id'   => $webdev,
        ]);

        $this->command->info('Users Has been Seeded');
    }
}
