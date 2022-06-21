FROM debian:latest

RUN apt update && apt install -y php-fpm php-pdo php-sqlite3 php-gd php-curl php-json

COPY my-www.conf /etc/php/7.4/fpm/pool.d/www.conf

RUN mkdir /run/php && touch /run/php/php7.4-fpm.pid &&\
    chown www-data:www-data /run/php/php7.4-fpm.pid &&\
    chmod 777 /run/php/php7.4-fpm.pid

RUN mkdir --parents /var/www/html && \
    chown -R www-data:www-data /var/www/html

CMD ["/usr/sbin/php-fpm7.4", "-F"]