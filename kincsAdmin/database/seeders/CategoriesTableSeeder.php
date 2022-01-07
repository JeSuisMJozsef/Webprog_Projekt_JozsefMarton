<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name'=>'Zöldség',
            'category_desc'=>'A paradicsom igazából nem is zöldség',
        ]);
        DB::table('categories')->insert([
            'category_name'=>'Gyümölcs',
            'category_desc'=>'A paradicsom igazából gyümölcs',
        ]);
        DB::table('categories')->insert([
            'category_name'=>'Tej',
            'category_desc'=>'Nagyon jó fehérjeforrás',
        ]);
        DB::table('categories')->insert([
            'category_name'=>'Tojás',
            'category_desc'=>'A bajnokok reggelijének egyik alapanyaga',
        ]);
        DB::table('categories')->insert([
            'category_name'=>'Kenyér',
            'category_desc'=>'Jobb itthon a fekete, mint máshol a fehér',
        ]);
    }
}
