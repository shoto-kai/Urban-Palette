<?php
$APP_ID = "1172315190109473";
$APP_SEACRET = "6acfa60835edb2066addcbd2fea0802f";
$graphapi_url = 'https://graph.facebook.com/v17.0/';
$facebook_id = '111064895340402';
$access_token = 'EAAQqNuZA4pSEBANd8lTbmUceZB5FCavsciq9nixv0ZA7Ik8TU9ZCvnQdP9l8k5brAacJZCdZA52RMMkZAXaZBTfXGZCLvIWmnC1zJe8C2UYWZBNyeCO1kvZC16ttlDJjwuqa6zqxhqzWUUfNQUVkM149BR34ScCiRjtJjmlXThwmPn53JsbZCcvTCSyF8bbvKdaYlZC8ZD';

$options = [
    'http' => [
        'method' => 'GET',
        'header' => 'Content-Type: application/json', // 必要に応じてヘッダーを追加します
    ],
];
$context = stream_context_create($options);

// インスタグラムのビジネスアカウントIDを取得
// $get_instagram_business_account_id_url = $graphapi_url.$facebook_id.'?fields=instagram_business_account{id,ig_id,username,profile_picture_url,media_count,followers_count,follows_count,name,biography,website}&access_token='.$access_token;
// $response = file_get_contents($get_instagram_business_account_id_url, false, $context);
$instagram_business_account_id = '17841407013891828';

// ハッシュタグのIDを取得
// $query = urlencode('渋谷');
// $get_hashtag_id_url = $graphapi_url.'ig_hashtag_search?user_id='.$instagram_business_account_id.'&q='.$query.'&access_token='.$access_token;
// $response = file_get_contents($get_hashtag_id_url, false, $context);
$hashtag_id_shibuya = '17843876368030861';

$hashtag_id = $hashtag_id_shibuya;
$condition = 'top_media'; // recent_media or top_media
// ハッシュタグ付きの最近のメディアを取得
$get_hashtag_recent_media_url = $graphapi_url.$hashtag_id.'/'.$condition.'?user_id='.$instagram_business_account_id.'&fields=id,media_url,caption&access_token='.$access_token;
$response = file_get_contents($get_hashtag_recent_media_url, true, $context);

$response_array = json_decode($response, true);

$x = 0;
while($x<=1000){
    foreach ($response_array["data"] as $item) {
        // echo "id: " . $item["id"] . PHP_EOL;
        if (isset($item["media_url"])) {
            echo "media_url: " . $item["media_url"] . PHP_EOL;
            echo "caption: " . str_replace(["\r\n", "\r", "\n"], '', $item["caption"]) . PHP_EOL;
        }
    }
    if (isset($response_array["paging"]["next"])) {
        $new_url = $response_array["paging"]["next"];
    } else {
        $x += 1000;
    }

    $response = file_get_contents($new_url, true, $context);
    $response_array = json_decode($response, true);
    $x ++;
}