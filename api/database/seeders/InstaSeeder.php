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
        DB::table('instagrams')->insert([
               
            'image_url'=>'xyz',
            'text'=>'松濤カフェおいしいよ',
           
         ]);
         
         DB::table('instagrams')->insert([
           
      
            'image_url'=>'opq',
            'text'=>'ドトールにきたよ',
         ]);
    }
}
