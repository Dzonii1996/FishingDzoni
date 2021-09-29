<?php


namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends  Seeder
{

    public function run()
    {

        $user = new User();
        $user ->name = 'Nikola Milutinovic';
        $user->email = 'dzoni@gmail.com';
        $user->password = bcrypt('secret');
        $user->save();


    }

}
