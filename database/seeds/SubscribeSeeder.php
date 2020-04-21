<?php

use Illuminate\Database\Seeder;
use App\Subscribe;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscribe::truncate();
        DB::table('subscribe')->insert(['link'=>'https://google.be']);

    }
}
