<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Report_a_ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('report_a_problem') -> insert ([
            ['problem_name' => '',
             'p_img' => '',
             'p_detail' =>'',
             'p_location' => ''],
             
            ['problem_name' => '',
             'p_img' => '',
             'p_detail' =>'',
             'p_location' => ''],

            ['problem_name' => '',
             'p_img' => '',
             'p_detail' =>'',
             'p_location' => ''],

            ['problem_name' => '',
             'p_img' => '',
             'p_detail' =>'',
             'p_location' => ''],
             
            ['problem_name' => '',
             'p_img' => '',
             'p_detail' =>'',
             'p_location' => ''],
        ]);
    }
}
