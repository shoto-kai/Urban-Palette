<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dic;
use App\Models\Post;
use App\Models\Instagram;


class PostsController extends Controller
{
    public function post(){

        $insta = new Instagram;
        // $dics = new dic;
        $post = new Post;
        $dics = ['タコベル','ドトール','松濤カフェ'];
        foreach ( $dics as $dic )
        {
            // $result = strpos($insta,$dic);
                // $result =Instagram::where('text','=',$dic)->get(['image_url']);
                $result = "SELECT * FROM Instagram WHERE `text` LIKE '%$dic%'";
                if($result !== false){
                    $post->image_url = $insta ->image_url;
                    // $post->unity_name = $dic -> unity_name;
                    $post->save();
                }else{
                    //何もしない
                }

        // $Post = new Post;

        // $image_url = 'abc';
        // $latitude = 1.123;
        // $longitude = 2.234;
        // $Post->image_url = $image_url;
        // $Post->latitude = $latitude;
        // $Post->longitude = $longitude;
        // $Post->save();

        // ToDo辞書の建物名からインスタの本文を検索;
        // $dics = 辞書DBのデータを格納;
        // foreach ( $dics as $dic )
        // {
        //     $instas = インスタテーブルからデータを格納;
            
        //     $result = strpos($insta,$dic);
        //     if($result !== false){
        //     $image = $dic['image_url'];
        //     $latitude = $dic['latitude'];
        //     $longitude = $dic['longitude'];
        //     $post = array('image_url'=>$image_url,'latitude'=>$latitude,'longitude'=>$longitude);
        //     $Post->fill($post)->save();
        
            // }
        }
    }
}