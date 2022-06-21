# Sample02

Simple Web server sample, based on Apache HTTP Server.

## Build

```
docker build -t sample02 .
```

## Start

```
docker run -dit --name run-sample02 -p 8080:80 sample02
```

## Config

extract default config:

```
docker run --rm httpd:2.4 cat /usr/local/apache2/conf/httpd.conf > my-httpd.conf
```

customize and copy back

```
FROM httpd:2.4
COPY ./my-httpd.conf /usr/local/apache2/conf/httpd.conf
```

## Remove

```
docker stop run-sample02
docker rm run-sample02
docker image rm sample02
# docker rmi sample02
```
