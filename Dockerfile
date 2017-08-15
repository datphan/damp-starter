FROM php:7.0-apache

ENV APP /var/www/html

RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

ADD ./config/ /usr/local/etc/php/

RUN apt-get update && apt-get install -y gettext --no-install-recommends
