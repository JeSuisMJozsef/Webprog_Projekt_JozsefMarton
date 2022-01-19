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
            'name'=>'Zöldség',
            'description'=>'A paradicsom igazából nem is zöldség!',
        ]);
        DB::table('categories')->insert([
            'name'=>'Gyümölcs',
            'description'=>'A paradicsom valójában gyümölcs!',
        ]);
        DB::table('categories')->insert([
            'name'=>'Tej',
            'description'=>'Nagyon jó fehérje és kálcium forrás!',
        ]);
        DB::table('categories')->insert([
            'name'=>'Tojás',
            'description'=>'A bajnokok reggelijének egyik alapanyaga.',
        ]);
        DB::table('categories')->insert([
            'name'=>'Kenyér',
            'description'=>'..Jobb itthon a fekete, mint máshol a fehér..',
        ]);
    }
}
