# Sample04

The docker solution of information system Nginx + PHP-FPM + MariaDB.

## Project structure

+ __[sample04]__:
  + __[nginx]__: common nginx docker image configuration
    + _Dockerfile_ :
    + _nginx.conf_ :
    + _000-default.conf_ :
  + __[php]__: common php-fpm docker image configuration
    + _Dockerfile_ :
    + _www.conf_ :
  + __[mariadb]__: common mariadb docker image configuration
    + _Dockerfile_ :
    + _init.sql_ :
    + _mariadb.conf_ :
  + __[data]__: data directory
  + _docker-compose.yaml_ :

## Build

```
docker-compose build --no-cache
```

## Run

```
docker-compose up -d
```

## Stop

```
docker-compose stop
```
