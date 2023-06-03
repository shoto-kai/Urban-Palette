<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitydicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unitydics')->insert([
            'unity_name' => 'abc1234',
            'latitude' => 35.655001,
            'longitude' => 139.695001
        ]);

        DB::table('unitydics')->insert([
            'unity_name' => 'def5678',
            'latitude' => 35.655011,
            'longitude' => 139.695011
        ]);

        DB::table('unitydics')->insert([

            'unity_name' => 'ghi1234',
            'latitude' => 35.655101,
            'longitude' => 139.695101
        ]);

        DB::table('unitydics')->insert([
            'unity_name' => 'jkl5678',
            'latitude' => 35.655511,
            'longitude' => 139.694911
        ]);
    }
}
