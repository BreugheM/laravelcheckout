<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('discounts')->insert(['name'=>'DISCOUNT A','description'=>'Beschrijving DISCOUNT A','percent'=>5]);
        DB::table('discounts')->insert(['name'=>'DISCOUNT B','description'=>'Beschrijving DISCOUNT B','percent'=>10]);
        DB::table('discounts')->insert(['name'=>'DISCOUNT C','description'=>'Beschrijving DISCOUNT C','percent'=>15]);
    }
}
