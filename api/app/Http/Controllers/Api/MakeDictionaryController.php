<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dic;

class MakeDictionaryController extends Controller
{
    public function dictionary(){
        // // $buildings = 辞書を読み込む？;
        // foreach( $buildings as  $building){
        //     $latitude = $building['latitude'];
        //     $longitude = $building['longitude'];
        //     $name = $building['name'];
        //     $location = array('latitude'=>$latitude,'longitude'=>$longitude,'name' =>$name);
        //     $Dics->fill($location)->save();

        $MakeDictionary = new Dic;
       
        $name = 'abc';
        $latitude = 1.123;
        $longitude = 2.234;
        $MakeDictionary->name = $name;
        $MakeDictionary->latitude = $latitude;
        $MakeDictionary->longitude = $longitude;
        $MakeDictionary->save();

        }
}

