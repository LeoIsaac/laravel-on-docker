# laravel-on-docker
これでdockerとdocker-composeさえ入っていればLaravelの開発が出来るよ！やったね！


## HOWTO
`git clone https://github.com/LeoIsaac/laravel-on-docker.git`

`cd laravel-on-docker`

`docker-compose up -d`

...これだけだとまだ上手くいかないので、

`docker exec -it web bash`でコンテナの中に入って、`composer update && php artisan key:generate`

さらに`chmod -R 777 storage bootstrap/cache`して初めてブラウザから`http://localhost/`で確認出来ます。
