FROM php:7-apache
ADD app/index.php /var/www/html/index.php
RUN chmod a+rx index.php

ARG ARG_APACHE_LISTEN_PORT=8080
ENV APACHE_LISTEN_PORT=${ARG_APACHE_LISTEN_PORT}
RUN sed -s -i -e "s/80/${APACHE_LISTEN_PORT}/" /etc/apache2/ports.conf /etc/apache2/sites-available/*.conf
USER www-data
EXPOSE ${APACHE_LISTEN_PORT}
