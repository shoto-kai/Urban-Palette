<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instagram;

class InstagramController extends Controller
{
    public function insta()
    {

        $graphapi_url = 'https://graph.facebook.com/v17.0/';
        $access_token = config("apikey.instagram_access_token");
        $instagram_business_account_id = '17841407013891828';
        $hashtag_id_shibuya = '17843876368030861';
        $hashtag_id_shibuya_gurume = '17842207411070816';


        $options = [
            'http' => [
                'method' => 'GET',
                'header' => 'Content-Type: application/json', // 必要に応じてヘッダーを追加します
            ],
        ];
        $context = stream_context_create($options);

        $hashtag_id = $hashtag_id_shibuya_gurume;
        $condition = 'recent_media'; // recent_media or top_media

        // ハッシュタグ付きの最近のメディアを取得
        $get_hashtag_recent_media_url = $graphapi_url . $hashtag_id . '/' . $condition . '?user_id=' . $instagram_business_account_id . '&fields=id,media_url,caption&access_token=' . $access_token;
        $response = file_get_contents($get_hashtag_recent_media_url, true, $context);

        $response_array = json_decode($response, true);

        $x = 0;
        while ($x <= 100) {
            foreach ($response_array["data"] as $item) {
                
                if (isset($item["media_url"])) {
                    $Instagram = new Instagram;

                    $postid = $item["id"];
                    $isId = $Instagram->where("postid","=",$postid)->first();
                    
                    if (!$isId) {
                        $image_url = $item["media_url"];
                        $text = null;
                        if (isset($item["caption"])) {
                            $text = str_replace(["\r\n", "\r", "\n"], '', $item["caption"]);
                        }
                        // echo $image_url . PHP_EOL;
                        $Instagram->postid = $postid;
                        $Instagram->image_url = str($image_url);
                        $Instagram->text = $text;
    
                        $Instagram->save();
                    }
                    
                    // echo "id: " . $item["id"] . PHP_EOL;
                    // echo "media_url: " . $item["media_url"] . PHP_EOL;
                    // echo "caption: " . str_replace(["\r\n", "\r", "\n"], '', $item["caption"]) . PHP_EOL;
                }
            }
            if (isset($response_array["paging"]["next"])) {
                $new_url = $response_array["paging"]["next"];
                // echo $new_url;
            } else {
                $x += 100;
            }

            $response = file_get_contents($new_url, true, $context);
            $response_array = json_decode($response, true);
            echo $x;
            $x++;
        }
    }
}
