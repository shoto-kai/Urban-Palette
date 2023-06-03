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
