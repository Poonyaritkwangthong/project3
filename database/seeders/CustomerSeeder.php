<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customer') -> insert([
            ['f_name' => '',
             'l_name' => '',
             'c_img' => '',
             'phone_n' => '',
             'user_id' => '',
             'password' => ''],

            ['f_name' => '',
             'l_name' => '',
             'c_img' => '',
             'phone_n' => '',
             'user_id' => '',
             'password' => ''],

            ['f_name' => '',
             'l_name' => '',
             'c_img' => '',
             'phone_n' => '',
             'user_id' => '',
             'password' => ''],

            ['f_name' => '',
             'l_name' => '',
             'c_img' => '',
             'phone_n' => '',
             'user_id' => '',
             'password' => ''],

            ['f_name' => '',
             'l_name' => '',
             'c_img' => '',
             'phone_n' => '',
             'user_id' => '',
             'password' => ''],
        ]);
    }
}
