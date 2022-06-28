APP_NAME=nginx-node

.PHONY: all

all: build

build:
	docker build -t ${APP_NAME} .

up: down remove
	docker run --name ${APP_NAME}-1 -p 8080:80 -d ${APP_NAME}

down:
	docker stop ${APP_NAME}-1

remove:
	docker rm ${APP_NAME}-1

rebuild: down remove build

bash:
	docker exec -it ${APP_NAME}-1 bash