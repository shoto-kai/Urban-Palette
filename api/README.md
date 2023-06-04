## 最初にすること
- /apiのディレクトリに移動
- 以下のコードを実行
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
- .env.exampleを元に.envを作成
- docker desktopを立ち上げる
- 以下のコマンドでsailを起動
```
./vendor/bin/sail up -d
```
- 以下のコマンドでデータベースを作成
```
./vendor/bin/sail artisan migrate
```
- localhostにアクセスしてlaravelを起動　

- 以下の通りにコマンドを打ってDBを構築する

①【unitydicsテーブル】ゲームオブジェクト名・緯度・経度
```
./vendor/bin/sail artisan app:unitydic
```
②【dicsテーブル】飲食店名・ゲームオブジェクト名
```
./vendor/bin/sail artisan app:dic
```
③②のカラムから”渋谷”が含まれるカラムを削除
```
./vendor/bin/sail artisan app:dic-delete
```
```
./vendor/bin/sail artisan app:dic-delete-shibuya
```
④【instagramsテーブル】画像url・インスタ投稿本文
```
./vendor/bin/sail artisan app:insta
```
⑤【postsテーブル】画像url・インスタ投稿本文（dicテーブルの飲食店名が含まれるinstagramsの投稿を保存）
```
./vendor/bin/sail artisan app:post
```

