## DEV

### PHP

php:7.4-fpm-buster
composer:1.10

### nginx

nginx:1.18-alpine

### mysql

mysql:5.7

## Usage

```
$ git clone git@github.com:ssk9597/docker-laravel-2.git
$ cd docker-laravel-2 && cd docker-laravel-2
$ docker-compose up -d --build
$ docker-compose exec app bash
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
$ exit
```

http://127.0.0.1:10080/task
