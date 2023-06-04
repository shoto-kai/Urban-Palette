<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Models\Post;


class ReturnController extends Controller
{
    public function return_to_unity(){



        $unity_name = "1.123";
        
        $result = Post::where('unity_name','=',$unity_name)->get(['image_url']);
       
        echo $result;

      
        }
}