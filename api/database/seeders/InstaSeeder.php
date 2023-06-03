<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dics')->insert([
               
            'image_url'=>'xyz',
            'text'=>'松濤カフェおいしいよ',
            'longitude'=>2.234
         ]);
         
         DB::table('dics')->insert([
           
      
            'name'=>'ドトール',
            'latitude'=>3.345,
            'longitude'=>4.456
         ]);
    }
}
