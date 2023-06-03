<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dic;
use App\Models\Unitydic;

class DicController extends Controller
{
    public function dic()
    {
        $API_KEY = config("apikey.hotpepper_access_key");
        $url = "http://webservice.recruit.co.jp/hotpepper/gourmet/v1/?key=" . $API_KEY . "&";

        $unitydics = Unitydic::all();
        foreach ($unitydics as $unitydic) {
            // echo "unity_name:" . $unitydic->unity_name . "latitude:" . $unitydic->latitude . "longitude:" . $unitydic->longitude . PHP_EOL;
            $locate = "lat=" . str($unitydic->latitude) . "&lng=" . str($unitydic->longitude) . "&range=1&order=10";
            $result = file_get_contents($url . $locate);
            $json = json_decode(json_encode(simplexml_load_string($result)), true);
            if (isset($json['shop'])) {
                $results = $json['shop'];
                // echo 'name: ' . $results[0]['name'] . PHP_EOL;
                $string = $results[0]['name'];
                $words = explode(" ", $string);

                foreach ($words as $word) {
                    $dic = new Dic;
                    $dic->unity_name = $unitydic->unity_name;
                    $dic->shop_name = $word;
                    $dic->save();
                    echo $word . PHP_EOL;
                }
            }
        }
    }
}
