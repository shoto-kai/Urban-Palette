<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instagram;

class InstagramController extends Controller
{
    public function insta(){

        $Instagram = new Instagram;
        $image ='abc';
        $text ='efg';
        $Instagram->image_url = $image;
        $Instagram->text = $text;
        $Instagram->save();

        // $instas = インスタからシャープ渋谷を取得;
        // foreach($instas as $insta){
        //    $image_url = $insta['image'];
        //    $text = $insta['text'];
        //    $post = array('image'=>$image,'text'=>$text);
        //    $Insta->fill($post)->save();  
        }
       
       }

