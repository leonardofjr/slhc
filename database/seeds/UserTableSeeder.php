<?php

use Illuminate\Database\Seeder;
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
        $role_admin = Role::where('name', 'Admin')->first();

        $admin = new User();
        $admin->fname = "Miguel";
        $admin->lname = "Felipa";
        $admin->email = "mfelipa@sacredlighthealing.ca";
        $admin->password = bcrypt("admin");
        $admin->save();
        $admin->roles()->attach($role_admin);
        $admin->settings()->attach( $role_admin);
    }
}
