<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Models\Post;


class ReturnController extends Controller
{
    public function return(Request $request){


        $posts = new Post;

        $latitude = 1.123;

        $post = Post::where('latitude','=',$latitude )->get();

        echo $post;
        // $posts = new Post;

        // $latitude = 1.123;

        // $Post = Post::where('latitude','=',$latitude )->get();

        // $post= $posts->first();
        // $image_url = $post->image_url;

        // return ("abc");
        //return gettype($image_url);
        // return response()->json([
        //     'message' => "abc",
        // ]);
       


            // $locations = unityから位置情報を取得;
            // foreach ($locations as $location){
            //     $posts = postテーブルのデータを格納;
            //     $result = where('location',$location)->get();
            //     ↑unity（？）に投稿;
                }
}

       

