Sample of nginx + php-fpm server. You can use `make` tool for building or docker commands.

## build

```bash
docker build -t nginx-node .
```

## run 

```bash
docker run --name nginx-node-1 -p 8080:80 -d nginx-node
```

## stop

```bash
docker stop nginx-node-1
```

## rm

```bash
docker rm nginx-node-1
```
