<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Status;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{


    public function run()
    {

        $authors = User::all();
        $statuses = Status::all();

        for ($i = 0; $i <= 10; $i++) {
            $title = 'Title ' . $i;


            DB::table('posts')->insert(
                [
                    'title' => 'Title ' . $i . ' ',
                    'slug' => Str::slug($title),
                    'content' => 'lorem ipsum',
                    'author_id' => $authors->random()->id,
                    'status_id' => $statuses->random()->id,
                ]
            );
        }

    }}

