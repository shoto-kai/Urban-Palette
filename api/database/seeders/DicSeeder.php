<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dics')->insert([
               
            'name'=>'松濤カフェ',
            'latitude'=>1.123,
            'longitude'=>2.234
         ]);
         
         DB::table('dics')->insert([
           
      
            'name'=>'ドトール',
            'latitude'=>3.345,
            'longitude'=>4.456
         ]);
    }
}
