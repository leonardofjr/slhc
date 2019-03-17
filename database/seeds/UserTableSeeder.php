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
        $role_user = Role::where('name', 'User')->first();
        $role_visitor = Role::where('name', 'Visitor')->first();


        $admin = new User();
        $admin->fname = "Leo";
        $admin->lname = "Felipa Jr.";
        $admin->email = "leo@startupdesigns.ca";
        $admin->password = bcrypt("admin");
        $admin->save();
        $admin->roles()->attach($role_admin);


        $user = new User();
        $user->fname = "Miguel";
        $user->lname = "Felipa";
        $user->email = "mfelipa@sacredlighthealing.ca";
        $user->password = bcrypt("user");
        $user->save();
        $user->roles()->attach($role_user);

        $visitor = new User();
        $visitor->fname = "John";
        $visitor->lname = "Doe";
        $visitor->email = "hello@johndoe.me";
        $visitor->password = bcrypt("visitor");
        $visitor->save();
        $visitor->roles()->attach($role_visitor);

    }
}
