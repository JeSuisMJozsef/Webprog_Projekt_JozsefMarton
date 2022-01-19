<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id'=>1,
            'name'=>'Paradicsom',
            'sku'=>'1000',
            'packaging'=>'kg',
            'stock'=>0,
            'price'=>8,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>1,
            'name'=>'Paprika',
            'sku'=>'1100',
            'packaging'=>'kg',
            'stock'=>0,
            'price'=>12,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>1,
            'name'=>'Saláta',
            'sku'=>'1200',
            'packaging'=>'db',
            'stock'=>0,
            'price'=>3,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>2,
            'name'=>'Alma',
            'sku'=>'2000',
            'packaging'=>'kg',
            'stock'=>0,
            'price'=>4.5,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>2,
            'name'=>'Málna',
            'sku'=>'2100',
            'packaging'=>'kg',
            'stock'=>0,
            'price'=>25,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>2,
            'name'=>'Aszalt szilva',
            'sku'=>'2200',
            'packaging'=>'csomag',
            'stock'=>0,
            'price'=>18,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>3,
            'name'=>'Friss tej',
            'sku'=>'3000',
            'packaging'=>'l',
            'stock'=>0,
            'price'=>3,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>4,
            'name'=>'Tojás 10',
            'sku'=>'4000',
            'packaging'=>'csomag',
            'stock'=>0,
            'price'=>10,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>4,
            'name'=>'Tojás 20',
            'sku'=>'4100',
            'packaging'=>'csomag',
            'stock'=>0,
            'price'=>19.5,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>4,
            'name'=>'Tojás 30',
            'sku'=>'4200',
            'packaging'=>'csomag',
            'stock'=>0,
            'price'=>29,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>5,
            'name'=>'Barna házi',
            'sku'=>'5000',
            'packaging'=>'db',
            'stock'=>0,
            'price'=>15,
    
        ]);
        DB::table('products')->insert([
            'category_id'=>5,
            'name'=>'Fehér házi',
            'sku'=>'5100',
            'packaging'=>'db',
            'stock'=>0,
            'price'=>15,
    
        ]);
    }
}
