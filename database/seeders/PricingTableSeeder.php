<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pricing')->insert([
            [
                'id' => 1,
                'price' => 500,
                'vote_count' => '10'
            ],
            [
                'id' => 2,
                'price' => 1000,
                'vote_count' => '25'
            ],
            [
                'id' => 3,
                'price' => 1500,
                'vote_count' => '40'
            ],
            [
                'id' => 4,
                'price' => 2000,
                'vote_count' => '60'
            ]
        ]);
    }
}
