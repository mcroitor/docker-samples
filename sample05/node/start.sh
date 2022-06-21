ln -sf /proc/1/fd/1 /var/log/nginx/error.log
ln -sf /proc/1/fd/1 /var/log/nginx/access.log

chown www-data:www-data -R /var/www/html

service php7.3-fpm start
service nginx start
