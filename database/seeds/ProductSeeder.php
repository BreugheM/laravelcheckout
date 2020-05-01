<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(['category_id'=>'1','brand_id'=>'1','photo_id'=>'1', 'name'=>'SCHOENEN GAZELLE','description'=>'beschrijving SCHOENEN GAZELLE','price'=>'99.99']);
        DB::table('products')->insert(['category_id'=>'1','brand_id'=>'1','photo_id'=>'2', 'name'=>'SCHOENEN SUPERSTARS','description'=>'beschrijving SCHOENEN SUPERSTARS','price'=>'199.99']);
        DB::table('products')->insert(['category_id'=>'2','brand_id'=>'2','photo_id'=>'3', 'name'=>'SOKKEN NIKE','description'=>'beschrijving SOKKEN NIKE','price'=>'29.99']);
        DB::table('products')->insert(['category_id'=>'2','brand_id'=>'1','photo_id'=>'4', 'name'=>'SOKKEN ADIDAS','description'=>'beschrijving SOKKEN ADIDAS','price'=>'19.99']);
        DB::table('products')->insert(['category_id'=>'3','brand_id'=>'3','photo_id'=>'5', 'name'=>'LACOSTE HEMD','description'=>'beschrijving LACOSTE HEMD','price'=>'59.99']);
    }
}
