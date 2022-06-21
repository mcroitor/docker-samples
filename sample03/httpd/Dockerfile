FROM debian:latest

RUN apt update && apt install -y apache2 &&\
    a2enmod alias && a2enmod proxy_fcgi

COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# CMD ["/usr/sbin/apache2", "-D", "FOREGROUND"]
CMD ["apache2ctl", "-D", "FOREGROUND"]