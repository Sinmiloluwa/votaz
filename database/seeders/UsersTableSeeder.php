<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'role_id' => 1,
            'name' => 'Qazeem',
            'email' => 'admin@admin.com',
            'sex' => 'Male',
            'phone_number' => '08180471478',
            'password' => bcrypt('Oladejo21!')
        ]);
    }
}
