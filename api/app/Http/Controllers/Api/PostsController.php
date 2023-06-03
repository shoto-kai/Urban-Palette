<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function post(){

        $Post = new Post;

        $image_url = 'abc';
        $latitude = 1.123;
        $longitude = 2.234;
        $Post->image_url = $image_url;
        $Post->latitude = $latitude;
        $Post->longitude = $longitude;
        $Post->save();

        // ToDo辞書の建物名からインスタの本文を検索;
        // $dics = 辞書DBのデータを格納;
        // foreach ( $dics as $dic )
        // {
        //     $instas = インスタテーブルからデータを格納;
        //     foreach ( $instas as $insta){
        //         $result = strpos($insta,$dic);
        //         if($result !== false){
        //         $image = $dic['image_url'];
        //         $latitude = $dic['latitude'];
        //         $longitude = $dic['longitude'];
        //         $post = array('image_url'=>$image_url,'latitude'=>$latitude,'longitude'=>$longitude);
        //         $Post->fill($post)->save();
        //        }
        // }
      
}
}

