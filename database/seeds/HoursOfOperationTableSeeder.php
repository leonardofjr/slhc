<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\HoursOfOperation;
use App\Role;


class HoursOfOperationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();

        $monday = new HoursOfOperation();
        $monday->day = 0;
        $monday->start = date("8:00:00");
        $monday->end = date("22:00:00");
        $monday->settings_id = $role_admin->id;
        $monday->save();
        $monday->users()->attach($role_admin->id);

        $tuesday = new HoursOfOperation();
        $tuesday->day = 1;
        $tuesday->start = date("8:00:00");
        $tuesday->end = date("22:00:00");
        $tuesday->settings_id = $role_admin->id;

        $tuesday->save();
        $tuesday->users()->attach($role_admin->id);

        $wednesday = new HoursOfOperation();
        $wednesday->day = 2;
        $wednesday->start = date("8:00:00");
        $wednesday->end = date("22:00:00");
        $wednesday->settings_id = $role_admin->id;
        $wednesday->save();
        $wednesday->users()->attach($role_admin->id);

        $thursday = new HoursOfOperation();
        $thursday->day = 3;
        $thursday->start = date("8:00:00");
        $thursday->end = date("22:00:00");
        $thursday->settings_id = $role_admin->id;
        $thursday->save();
        $thursday->users()->attach($role_admin->id);

        $friday = new HoursOfOperation();
        $friday->day = 4;
        $friday->start = date("8:00:00");
        $friday->end = date("22:00:00");
        $friday->settings_id = $role_admin->id;
        $friday->save();
        $friday->users()->attach($role_admin->id);

        $saturday = new HoursOfOperation();
        $saturday->day = 5;
        $saturday->start = date("8:00:00");
        $saturday->end = date("22:00:00");
        $saturday->settings_id = $role_admin->id;

        $saturday->save();
        $saturday->users()->attach($role_admin->id);

        $sunday = new HoursOfOperation();
        $sunday->day = 6;
        $sunday->start = date("8:00:00");
        $sunday->end = date("22:00:00");
        $sunday->settings_id = $role_admin->id;

        $sunday->save();

        $sunday->users()->attach($role_admin->id);

    }
}
