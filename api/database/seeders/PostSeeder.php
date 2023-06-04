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
            'unity_name' => '1.123',
            'image_url' => 'https://scontent-nrt1-2.cdninstagram.com/v/t51.29350-15/350970695_6408823202510899_6203070303112246299_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8ae9d6&_nc_ohc=avzUV9YwQr8AX9aXK3x&_nc_oc=AQnuHH2iZa_oDDAagxya4cKzNzIWMRFezi65v_-kyGwM8vf7uWB0cRr3Cm8lPZzQ8fU&_nc_ht=scontent-nrt1-2.cdninstagram.com&edm=APCawUEEAAAA&oh=00_AfBcaE4Ni8dHAak8f_8lAUPLbcg609rPlt_qwpoP9TZH3w&oe=647F1EF9',
         ]);

        

        DB::table('posts')->insert([
            'unity_name' => '2.234',
            'image_url' => 'https://scontent-nrt1-2.cdninstagram.com/v/t51.29350-15/351389578_1981545845527451_8842936510161703124_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8ae9d6&_nc_ohc=IdT52j4R3iYAX8b_fnJ&_nc_ht=scontent-nrt1-2.cdninstagram.com&edm=APCawUEEAAAA&oh=00_AfDcH5m-XraCQTowrEQK9Gj0kJmOnh1ElS-uv8jdfjG54A&oe=64804E22',
        ]);

    }
}
