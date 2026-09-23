# Container image for running the Field Day site on Google Cloud Run.
# The site is plain PHP with no build step at deploy time (compiled CSS is committed).
FROM php:8.3-apache

# Cloud Run tells the container which port to listen on via $PORT (default 8080).
ENV PORT=8080
RUN sed -i 's/Listen 80$/Listen ${PORT}/' /etc/apache2/ports.conf \
 && sed -i 's/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/' /etc/apache2/sites-available/000-default.conf \
 && echo 'ServerName localhost' > /etc/apache2/conf-available/servername.conf \
 && a2enconf servername \
 && sed -i "/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/" /etc/apache2/apache2.conf \
 && a2enmod rewrite headers expires \
 && cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY . /var/www/html/

EXPOSE 8080
