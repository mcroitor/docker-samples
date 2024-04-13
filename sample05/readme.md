# Sample05

Cluster of nginx servers with a load balancer. The load balancer is a nginx server that forwards the requests to the other 3 nginx servers.

## Build

```bash
docker-compose build --no-cache --force-rm
```

## Run

```bash
docker-compose up -d
```

## Stop

```bash
docker-compose down
```
