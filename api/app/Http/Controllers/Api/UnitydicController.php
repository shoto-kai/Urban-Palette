<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Unitydic;

class UnitydicController extends Controller
{
    public function unitydic()
    {
        // // $buildings = 辞書を読み込む？;
        // foreach( $buildings as  $building){
        //     $latitude = $building['latitude'];
        //     $longitude = $building['longitude'];
        //     $name = $building['name'];
        //     $location = array('latitude'=>$latitude,'longitude'=>$longitude,'name' =>$name);
        //     $Dics->fill($location)->save();

        $Unitydic = new Unitydic;

        $unity_name = 'abc21212';
        $latitude = 35.123123;
        $longitude = 136.234234;
        $Unitydic->unity_name = $unity_name;
        $Unitydic->latitude = $latitude;
        $Unitydic->longitude = $longitude;
        $Unitydic->save();
    }
}
