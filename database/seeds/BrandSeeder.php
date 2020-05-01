<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(['name'=>'ADIDAS','description'=>'Beschrijving ADIDAS']);
        DB::table('brands')->insert(['name'=>'NIKE','description'=>'Beschrijving ADIDAS']);
        DB::table('brands')->insert(['name'=>'LACOSTE','description'=>'Beschrijving ADIDAS']);

    }
}
