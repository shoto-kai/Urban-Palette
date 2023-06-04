<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Models\Post;


class ReturnController extends Controller
{
    public function return_to_unity($building_id){

        $unity_name = $building_id;

        //$unity_name = "bldg_b585c997-a66a-4534-b2c0-4ad931ad4f77";
        
        //$results = array(Post::where('unity_name','=',$unity_name)->get(['image_url']));
        $result = Post::inRandomOrder()->where('unity_name','=',$unity_name)->first();

        if ( $result == Null){
            $result = Post::inRandomOrder()->first();
        }

        return $result->image_url;
        
        // $result = array_rand($results,1);

        // return $result;

        // return json_encode($results);
       

      
        }
}