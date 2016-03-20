<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $webdev         = Category::whereName('Web Development Competition')->first()->id;
        $programming    = Category::whereName('Programming Competition')->first()->id;

        $adminRole  = Role::whereName('Admin')->first()->id;
        $userRole   = Role::whereName('User')->first()->id;

        User::create(array(
            'username'              => 'admin',
            'name'                  => 'Administrator',
            'email'                 => 'admin@porsematif.com',
            'password'              => 'admin',
            'institution_name'      => 'Universitas Islam Indonesia',
            'institution_address'   => 'Jalan Kaliurang Km. 14.5, Besi, Sleman',
            'role_id'               => $adminRole,
            'category_id'           => $webdev
        ));

        User::create(array(
            'username'              => 'uiilabsdev',
            'name'                  => 'UIILabsDev',
            'email'                 => 'uiilabdsdev@gmail.com',
            'password'              => 'uiilabsdev',
            'institution_name'      => 'Universitas Islam Indonesia',
            'institution_address'   => 'Jalan Kaliurang Km. 14.5, Besi, Sleman',
            'role_id'               => $userRole,
            'category_id'           => $programming
        ));

        $this->command->info('Users Has been Seeded');
    }
}
