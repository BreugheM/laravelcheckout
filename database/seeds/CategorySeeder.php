<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'SCHOENEN','description'=>'Beschrijving SCHOENEN']);
        DB::table('categories')->insert(['name'=>'SOKKEN','description'=>'Beschrijving SOKKEN']);
        DB::table('categories')->insert(['name'=>'HEMDEN','description'=>'Beschrijving HEMDEN']);
    }
}
