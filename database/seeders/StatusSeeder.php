<?php


namespace Database\Seeders;


use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends  Seeder
{
    public function run()
    {
        $draft = new Status();
        $draft->name = 'draft';
        $draft->save();

        $publish = new Status();
        $publish->name = 'publish';
        $publish->save();
    }
}
