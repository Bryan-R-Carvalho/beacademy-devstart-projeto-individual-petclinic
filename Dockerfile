FROM php:8.0.5

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install mysqli pdo pdo_mysql
WORKDIR /app
COPY . /app
RUN composer update
RUN adduser php
USER php

RUN composer install

USER root
CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000