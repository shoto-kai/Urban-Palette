<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('posts')->insert([
               
                'image_url'=>'abc',
                'latitude'=>1.123,
                'longitude'=>2.234
             ]);
             
             DB::table('posts')->insert([
               
          
                'image_url'=>'def',
                'latitude'=>3.345,
                'longitude'=>4.456
             ]);
    }
}
