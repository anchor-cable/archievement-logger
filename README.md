Achievement
========
自分の達成したい実績を登録しておき、達成状況を記録するアプリ。


Installation
========

```bash
$ cp .env.sample .env
$ vim .env # usually, it is not necessary for local develop environment.
$ cp lumen/.env.sample lumen/.env
$ vim lumen/.env # usually, it is not necessary for local develop environment.
$ docker-compose run --rm app composer install
$ docker-compose run --rm app php artisan key:generate
$ docker-compose run --rm app php artisan storage:link
$ docker-compose run --rm app php artisan migrate
```

Launch
========

```bash
$ docker-composer up -d web app db
$ open http://localhost:8080
```

https://github.com/ikasam/lumen-tutorial