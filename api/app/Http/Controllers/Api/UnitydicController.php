<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Unitydic;

class UnitydicController extends Controller
{
    public function unitydic()
    {
        $filePath = storage_path('app/public/positions.csv');
        $file = fopen($filePath, 'r');

        if ($file) {
            while (($data = fgetcsv($file)) !== false) {
                // echo "unity_name:" . $data[1] . "latitude:" . $data[6] . "longitude:" . $data[7] . PHP_EOL;
                
                $Unitydic = new Unitydic;
                $Unitydic->unity_name = $data[1];
                $Unitydic->latitude = floatval($data[6]);
                $Unitydic->longitude = floatval($data[7]);
                $Unitydic->save();
            }

            fclose($file);
        } else {
            // ファイルのオープンに失敗した場合の処理
        }
    }
}
