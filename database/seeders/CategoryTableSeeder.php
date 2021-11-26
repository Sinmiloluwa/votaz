<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'promising'
            ],
            [
                'id' => 2,
                'name' => 'exceptional'
            ],
            [
                'id' => 3,
                'name' => 'others'
            ]
        ]);
    }
}
