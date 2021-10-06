<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $dev_role = new Role();
        $dev_role->slug = 'administrator';
        $dev_role->name = 'Administrator';
        $dev_role->save();

        $dev_role = Role::where('slug', 'administrator')->first();
        $developer = new User();
        $developer->name = 'Nikola Milutinovic';
        $developer->email = 'nikola@gmail.com';
        $developer->password = bcrypt('dzoni123');
        $developer->save();

        $developer->roles()->attach($dev_role);
        $dev_role = Role::where('slug', 'administrator')->first();
        $developer = new User();
        $developer->name = 'Nikola Vuckovic';
        $developer->email = 'nikola123@gmail.com';
        $developer->password = bcrypt('dzoni123');
        $developer->save();
        $developer->roles()->attach($dev_role);

    }
}
