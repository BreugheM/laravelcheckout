<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photos')->insert(['file'=>'1587710631adidas_gazelle.jpg']);
        DB::table('photos')->insert(['file'=>'1587710638adidas_superstar.jpg']);
        DB::table('photos')->insert(['file'=>'1587710651nike_performance.jpg']);
        DB::table('photos')->insert(['file'=>'1587711803adidas_originals.jpg']);
        DB::table('photos')->insert(['file'=>'1587797447lacoste_hemd.jpg']);
    }
}
