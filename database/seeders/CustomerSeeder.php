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
            ['f_name' => 'manee',
             'l_name' => 'meena',
             'c_img' => 'manee.jpj',
             'phone_n' => '0615852314',
             'user_id' => 'manee01',
             'password' => '061585'],

            ['f_name' => 'somsuk',
             'l_name' => 'sodsai',
             'c_img' => 'somsuk.jpj',
             'phone_n' => '0645942351',
             'user_id' => 'somsuk02',
             'password' => '064594'],

            ['f_name' => 'arthai',
             'l_name' => 'aodaom',
             'c_img' => 'arthai.jpg',
             'phone_n' => '0632197894',
             'user_id' => 'arthai03',
             'password' => '063219'],

            ['f_name' => 'artid',
             'l_name' => 'seelerd',
             'c_img' => 'artid.jpg',
             'phone_n' => '0854569423',
             'user_id' => 'artid04',
             'password' => '085456'],

            ['f_name' => 'rodtung',
             'l_name' => 'jitmuangnon',
             'c_img' => 'rodtung.jpg',
             'phone_n' => '0987542984',
             'user_id' => 'rodtung05',
             'password' => '098754'],
        ]);
    }
}
