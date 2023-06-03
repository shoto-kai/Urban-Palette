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

            'unity_name' => 'abc1234',
            'shop_name' => 'タコベル'
        ]);

        DB::table('dics')->insert([
            'unity_name' => 'def5678',
            'shop_name' => '松濤カフェ'
        ]);

        DB::table('dics')->insert([

            'unity_name' => 'ghi1234',
            'shop_name' => 'ドトール'
        ]);

        DB::table('dics')->insert([
            'unity_name' => 'jkl5678',
            'shop_name' => '松屋'
        ]);
    }
}
