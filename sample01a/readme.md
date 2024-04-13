# Sample01

## Build

This will build an image `sample01` from the Dockerfile.

```bash
docker build -t sample01 .
```

## Run

This will run the image `sample01`. The container will be named `sample01` also. The container will print current date and time, after this will be stopped.

```bash
docker run --name sample01 sample01
```

## Remove

If you want to rebuild container, you need to remove it, because old version use the same name.

```bash
docker rm sample01
```
