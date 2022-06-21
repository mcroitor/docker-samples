FROM debian:10.12

ARG PHP_VERSION=7.3

RUN apt update && apt upgrade -y

RUN apt install -y mc nginx php${PHP_VERSION}-fpm

COPY ./site/ /var/www/html

# RUN chown www-data:www-data -R /var/www/html

COPY nginx.conf /etc/nginx/nginx.conf

COPY www.conf /etc/php/${PHP_VERSION}/fpm/pool.d/www.conf

COPY start.sh /start.sh

# CMD ["nginx", "-g", "daemon off;"]
CMD ["bash", "/start.sh"]