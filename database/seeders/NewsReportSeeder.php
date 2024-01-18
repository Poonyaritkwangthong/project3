<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news_report') -> insert([
            ['name_news' => '',
             'n_img' => '',
             'n_detail' => '',
             'n_date' => ''],

            ['name_news' => '',
             'n_img' => '',
             'n_detail' => '',
             'n_date' => ''],

            ['name_news' => '',
             'n_img' => '',
             'n_detail' => '',
             'n_date' => ''],

            ['name_news' => '',
             'n_img' => '',
             'n_detail' => '',
             'n_date' => ''],
             
            ['name_news' => '',
             'n_img' => '',
             'n_detail' => '',
             'n_date' => ''],
     ]);
    }
}
