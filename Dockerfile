FROM php:8.1-apache

WORKDIR /var/www/html

COPY app/. /var/www/html/

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80
